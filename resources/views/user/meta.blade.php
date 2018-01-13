
    <div class="form-group col-xs-12">
        @input_maker_label('Nachname')
        @input_maker_create('meta[lastname]', ['type' => 'string'], $user)
    </div>
    
    <div class="form-group col-xs-12">
        @input_maker_label('Anrede')
        @input_maker_create('meta[gender]', ['type' => 'select', 'label' => 'gender', 'options' => [ 'Herr' => 'male', 'Frau' => 'female' ]], $user)
    </div>

    <div class="form-group col-xs-12">
        @input_maker_label('Stadt')
        @input_maker_create('meta[city]', ['type' => 'string'], $user)
    </div>

    <div class="form-group col-xs-12">
        @input_maker_label('Geburtstag')
        @input_maker_create('meta[birthday]', ['type' => 'string' , 'class' => 'datepicker'], $user)
    </div>

    <!--
    <div class="raw-margin-top-24">
        <label for="Birthday">Birthday</label>
        <input id="Meta[birthday]" class="form-control" type="text" name="meta[birthday]" value="09/06/1984" placeholder="Meta birthday">
    </div>
    -->

    <div class="form-group col-xs-12">
        @input_maker_label('Activate')
        <input type="checkbox" name="meta[is_active]" value="1" @if ($user->meta->is_active) checked @endif>
    </div>
