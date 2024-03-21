<?php

namespace App\Http\Controllers;

use App\Models\bank;
use App\Models\categories;
use App\Models\productes;
use App\Models\User;
use App\Models\usuaris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class BotigaController extends Controller
{

    // Pujada d'arxius (imatges)
    // https://blog.filestack.com/step-step-guide-laravel-file-upload/

    public function newUser(Request $r)
    {
        $validated = request()->validate(
            [
                'name' => 'required|min:3|max:40',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed|min:8',
            ]
        );

        User::create(
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'role' => 'user',
                'active' => true,
            ]
        );

        return Redirect::to('/login')->with('email', $r->email);
    }

    public function oldUser(Request $r)
    {
        $validated = request()->validate(
            [
                'email' => "required|email",
                'password' => 'required|min:8'
            ]
        );

        if (auth()->attempt($validated)) {
            $userEx = User::where("email", $r->email)->first();

            if ($userEx->active == true) {
                request()->session()->regenerate();
                return redirect("/");
            }
        }

        return redirect("/login")->withSuccess("Esta cuenta no está registrada");
    }

    public function logout(Request $r)
    {

        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();


        return redirect("/");

    }

    public function store(Request $r)
    {

        $categories = categories::all();
        $products = (!isset($r->cate)) ? productes::where("activo", true)->get() : productes::where("categoria_id", $r->cate)->where("activo", true)->get();

        return view(
            "store",
            [
                "categories" => $categories,
                "products" => $products,
            ]
        );

    }

    public function showProd(productes $prod)
    {

        if ($prod->activo == false) {
            abort(404, "WOW! Product not found!!");
        }

        $category = categories::find($prod->categoria_id);

        return view(
            "product",
            [
                "product" => $prod,
                "category" => $category
            ]
        );

    }

    public function purchase(productes $prod, $cant)
    {


        $prod->update(["cantidad" => $prod->cantidad - $cant]);

        return redirect("/store");

    }

    public function buyProd(productes $prod, $show, bank $card = null, Request $r, $cant = null)
    {

        $bankAccounts = bank::where("usuari_id", Auth::user()->id)->get();



        $productCant = ($cant == null) ? $r->cant : $cant;


        $show = ($show == 0) ? "false" : "true";


        return view(
            "bank",
            [
                "show" => $show,
                "product" => $prod,
                "productCant" => $productCant,
                "bankAccounts" => $bankAccounts
            ]
        );

    }

    public function addCard(Request $r)
    {
        $validated = request()->validate([
            'card-number' => 'required|unique:banks,numero',
            'card-holder' => 'required|min:3|max:40',
            'expiration-date' => [
                'required',
                'date',
                function ($attribute, $value, $fail) {
                    // Verificar que la fecha de expiración sea mayor que la fecha actual
                    if (\Carbon\Carbon::now()->greaterThanOrEqualTo(\Carbon\Carbon::parse($value))) {
                        $fail("La fecha de expiración debe ser mayor que la fecha actual.");
                    }
                },
            ],
            'cvv' => 'required|min:3|max:3',
        ], [
            'card-number.required' => 'El número de tarjeta es obligatorio.',
            'card-number.unique' => 'Este número de tarjeta ya está registrado.',
            'card-holder.required' => 'El titular de la tarjeta es obligatorio.',
            'card-holder.min' => 'El titular de la tarjeta debe tener al menos :min caracteres.',
            'card-holder.max' => 'El titular de la tarjeta no puede tener más de :max caracteres.',
            'expiration-date.required' => 'La fecha de expiración es obligatoria.',
            'cvv.required' => 'El CVV es obligatorio.',
            'cvv.min' => 'El CVV debe tener al menos :min caracteres.',
            'cvv.max' => 'El CVV no puede tener más de :max caracteres.',
        ]);

        bank::create(
            [
                'usuari_id' => Auth::user()->id,
                'titular' => $validated["card-holder"],
                'numero' => $validated['card-number'],
                'fCaduca' => $validated['expiration-date'],
                'cvv' => $validated['cvv'],
            ]
        );

        return redirect()->back()->with('BankSuccess', 'Tarjeta añadida correctamente.');
    }

    public function dashboard(Request $r)
    {

        if (auth()->id() != 1) {
            abort(403, "You don't have enough magic");
        }

        $categories = categories::all();
        $products = productes::all();
        $users = User::all();

        return view(
            "dashboard",
            [
                "categories" => $categories,
                "products" => $products,
                "users" => $users,
            ]
        );


    }

    public function newCategory(Request $r)
    {

        $category = new categories;

        $category->nombre = $r->cname;
        $category->descripcion = $r->cdesc;
        $category->imgURL = "empty";

        $category->save();

        return redirect("/dashboard")->with('CategorySuccess', 'Categoría creada correctamente.');
    }

    public function delCategory(Request $r)
    {

        $productsCount = productes::where("categoria_id", $r->id)->count();

        if ($productsCount > 0) {
            return redirect("/dashboard")->with('CategoryError', 'No se puede eliminar la categoría porque tiene productos asociados.');
        }

        $category = categories::find($r->id);

        $category->delete();
        return redirect("/dashboard")->with('CategorySuccess', 'Categoría eliminada correctamente.');


        // return redirect("/dashboard");
    }

    public function newProduct(Request $r)
    {

        $product = new productes;

        $product->nombre = $r->pname;
        $product->descripcion = $r->pdesc;
        $product->precio = $r->pprice;
        $product->descuento = $r->pdto;
        $product->cantidad = $r->pcant;
        $product->activo = filter_var($r->pstat, FILTER_VALIDATE_BOOLEAN);
        // $product->activo = true;
        $product->categoria_id = $r->pcat;

        $archivo = $r->file('file')->store("pImg", "public");

        $product->imgURL = $archivo;

        $product->save();

        return redirect("/dashboard");
    }

    public function modProduct(Request $r)
    {

        $product = productes::find($r->pid);

        if ($r->op == "upd") {
            $product->update([
                "nombre" => $r->pname,
                "descripcion" => $r->pdesc,
                "precio" => $r->pprice,
                "descuento" => $r->pdto,
                "cantidad" => $r->pcant,
                "categoria_id" => $r->pcat,
                "activo" => filter_var($r->pstat, FILTER_VALIDATE_BOOLEAN)
            ]);
        } else if ($r->op == "del") {
            $product->delete();
        }

        return redirect("/dashboard");
    }


    public function updUser(Request $r)
    {

        $user = usuaris::find($r->id);

        if ($user->activo) {
            $user->update(["activo" => false]);
        } else {
            $user->update(["activo" => true]);
        }

        return redirect("/dashboard");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
