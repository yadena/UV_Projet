@extends(layouts.app)

@section(body)
    <div class="container">
        <div class="card">
            <div class="card-header bg-info text-white">Ajouter un candidat</div>
            <div class="card-body">
                <form action="{{route('store.candidat)}}" method="post">
                    
                    <div class="form group">
                        <label-for="">Nom:</label-for>

                        <input type="text" name="nom" id="" class="form-control">
                    </div>
                    <div class="form group">
                        <label-for="">Prenom:</label-for>

                        <input type="text" name="prenom" id="" class="form-control">
                    </div>
                    <div class="form group">
                        <label-for="">Matricule:</label-for>

                        <input type="text" name="matricule" id="" class="form-control">
                    </div>
                    <div class="form group">
                        <label-for="">niveau:</label-for>

                        <select class="form-select" aria-label="Choisis ton niveau">
                            <option selected>Niveau</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <div class="form group">

                        <button type="submit" class="btn-success">Enregistrer</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection