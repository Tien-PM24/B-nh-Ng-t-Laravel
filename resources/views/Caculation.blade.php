
<form action="{{ route('calculate') }}" method="post">
  @csrf
  <input type="number" name="num1">
  <select name="operator">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
  </select>
  <input type="number" name="num2">
  <button type="submit">Calculate</button>
</form>

@if(isset($result))
  <p>Result: {{$result}}</p>
@endif


