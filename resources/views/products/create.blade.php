@extends("layouts.app")
@section("content")


<form method="post" action="/products/create">   
      
              @csrf

               <h5> AJOUTER VOTRE PRODUIT</h5>
 
   <fieldset>

       <label for="productname">Quel est le nom de votre produit </label>
       <input type="text" name="productname" id="productname" />

       <br>

       <label for="quantite">Quelle est la quantite du produit </label>
       <input type="number" name="quantity" id="quantity" />
       <br>

       <label for="price">Quel est le prix de votre  produit </label>
       <input type="number" name="price" id="price" />

       <div>
             <textarea name="Product_benefits" id="description" cols="30" rows="10" class="form-control" placeholder="avantages du produit"></textarea>
               </div>
               <br>
               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>

   </fieldset>
   </form>
   @endsection



           
