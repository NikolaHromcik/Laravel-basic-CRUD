<h1>{{$prijava->ime}} {{$prijava->prezime}}</h1>
<form action="{{ route('promeni-status', ['id'=>$prijava->id]) }}" method="post">
    @csrf
    <div>
    <label for="">Neobradjen</label>
    <input type="radio" name="status" value="-1" @if($prijava->status== -1) checked  @endif>
    </div>
    <div>
    <label for="">odbijen</label>
    <input type="radio" name="status" value="0" @if($prijava->status== 0) checked  @endif>
    </div>
    <div>
    <label for="">primljen</label>
    <input type="radio" name="status" value="1" @if($prijava->status== 1) checked  @endif>
    </div>
    <div>
        <button class="btn btn-primary">primeni izmene</button>
    </div>
</form>