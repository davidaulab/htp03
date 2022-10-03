<div class="col d-flex justify-content-center">
    <div class="card">
        <div class="card-body  d-flex row ">
            <p class="card-title text-center text-success">
                <label for="title" class="form-label">Cervecería</label>
                <input type="text" name="title" id="title" value="{{ old ('title') }}"
                    placeholder="Indica aquí el nombre de la cervecería" class="form-control @error('name') 
                        border-danger
                    @enderror"></p>
            @error('title')
            <p class="text-danger">{{$errors->first('title')}}</p>
            @enderror

            <p class="card-text"><label for="cuerpo" class="form-label">Descripción</label>
                <textarea class="form-control" id="cuerpo" name="cuerpo" rows="3">{{ old ('cuerpo') }}</textarea></p>
            @error('cuerpo')
            <p class="text-danger">{{$errors->first('cuerpo')}}</p>
            @enderror
            <p class="card-text">
                <label for="place" class="form-label">Localidad</label>
                <input type="text" name="place" id="place" value="{{ old ('place') }}"
                    placeholder="Indica aquí la localidad" class="form-control"></p>
            @error('place')
            <p class="text-danger">{{$errors->first('place')}}</p>
            @enderror

            <p class="card-text">
                <label for="file" class="form-label">Imagen</label>
                <input type="file" name="img" id="img" class="form-control"></p>
        </div>
    </div>
</div>
