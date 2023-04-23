
<x-layout>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <h1 class="text-center">Registrati</h1>
            <form method="POST" action="{{route('register')}}" >
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome Completo</label>
                    <input name="name" type="text" class="form-control"  aria-describedby="name">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email</label>
                  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input name="password" type="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
                    <input name="password_confirmation" type="password" class="form-control" >
                  </div>
                <button type="submit" class="btn btn-primary">Registrati</button>
              </form>
        </div>
    </div>
</div>
</x-layout>