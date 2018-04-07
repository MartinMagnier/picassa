@extends('layouts.app')


@section('content')


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="create" action="/create" method="post" enctype="multipart/form-data" class="form-create" style="margin: auto; color: black;">
                    <div class="modal-body">
                        <button type="button" class="close"  aria-label="Close">
                            <span aria-hidden="true"><a href="/">&times;</a></span>
                        </button>
                            <div class="form-group">
                                <label for="titre" >Titre :</label>
                                <input type="text" name="titre" class="form-control" required placeholder="Entrer le titre de la photo" />
                            </div>
                            <div class="form-group">
                                <label for="titre">Votre photo :</label>
                                <input type="file" class="form-control" name="photo" required />
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Votre album</label>
                                <select multiple class="form-control" id="exampleFormControlSelect2">
                                    <option>Paysage</option>
                                    <option>Portrait</option>
                                    <option>Mode</option>
                                    <option>Lifestyle</option>
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-primary mb-2">Publier</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection