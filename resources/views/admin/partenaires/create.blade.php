<form action="{{url('/partenaire/insérer')}}" method="POST">
    @csrf

    <input type="text" name="libelle">
    @error('libelle')
        {{$message}}
    @enderror
    <input type="submit" value="SOUMETTRE">
</form>