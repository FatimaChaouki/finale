<div>
  <h1>Crea il annuncio</h1>
  <form wire:submit.prevent="store">
    @csrf
    <div class="mb-3">
      <label for="title" >titolo annuncio</label>
      <input wire:model="title" type="text" class="form-control">
    </div>
    <div class="mb-3">
      <label for="description" >Descrizione prodotto</label>
      <textarea wire:model="description" class="form-control" ></textarea>
    </div>
    <div class="mb-3 form-check">
      <label  for="price">Prezzo</label>
      <input wire:model="price" class="form-control"type="number" >
    </div>
    <button type="submit" class="btn btn-primary shadow px-4 py-2">Crea il tuo Prodotto</button>
  </form>
</div>
