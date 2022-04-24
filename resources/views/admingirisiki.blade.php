<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<head>
    <style>
        body {
  align-items: center;
  background-color: #ffffff;
  display: flex;
  justify-content: center;
  height: 100vh;
}

.form {
  background-color:orange;
  border-radius: 20px;
  box-sizing: border-box;
  height: 500px;
  padding: 20px;
  width: 320px;
}

.title {
  color: #eee;
  font-family: sans-serif;
  font-size: 36px;
  font-weight: 600;
  margin-top: 30px;
}

.subtitle {
  color: #eee;
  font-family: sans-serif;
  font-size: 16px;
  font-weight: 600;
  margin-top: 10px;
}

.input-container {
  height: 50px;
  position: relative;
  width: 100%;
}

.ic1 {
  margin-top: 40px;
}

.ic2 {
  margin-top: 30px;
  
}

.input {
  background-color: #ffffff;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #000;
  font-size: 18px;
  height: 100%;
  outline: 0;
  padding: 4px 20px 0;
  width: 100%;
}

.cut {
  background-color: orange;
  border-radius: 10px;
  height: 20px;
  left: 20px;
  position: absolute;
  top: -20px;
  transform: translateY(0);
  transition: transform 200ms;
  width: 76px;
  
}

.cut-short {
  width: 50px;
}

.input:focus ~ .cut,
.input:not(:placeholder-shown) ~ .cut {
  transform: translateY(8px);
}

.placeholder {
  color: #000;
  font-family: sans-serif;
  left: 20px;
  line-height: 14px;
  pointer-events: none;
  position: absolute;
  transform-origin: 0 50%;
  transition: transform 200ms, color 200ms;
  top: 20px;
}

.input:focus ~ .placeholder,
.input:not(:placeholder-shown) ~ .placeholder {
  transform: translateY(-30px) translateX(10px) scale(0.75);
}

.input:not(:placeholder-shown) ~ .placeholder {
  color: #808097;
}

.input:focus ~ .placeholder {
  color: #000;
}

.submit {
  background-color: #ffffff;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #000;
  cursor: pointer;
  font-size: 18px;
  height: 50px;
  margin-top: 38px;
  // outline: 0;
  text-align: center;
  width: 100%;
}

.submit:active {
  background-color: #000;
}
    </style>
</head>
<body>
<form method="POST" class="my-login-validation" action="{{url('admingirisüc')}}">
<div class="form">
    @csrf
                                @if(session('status'))
                                <h5 style="margin-left: 10px">{{session('status')}}</h5>
                              @endif
      <div class="title">Hoşgeldiniz</div>
      <div class="subtitle">Admin Girişi yapınız.</div>
      <div class="input-container ic1">
        <input id="email" class="input" name="email" type="text" placeholder=" " />
        <div class="cut cut-short"></div>
        <label for="email" class="placeholder">Email</>
      </div>
      <div class="input-container ic2">
        <input id="Sifre" class="input" name="Sifre" type="password" placeholder=" " />
        <div class="cut"></div>
        <label for="Sifre" class="placeholder">Sifre</label>
      </div>

      <button type="text" class="submit">Giriş Yap </button>
      

    </div>
</form>
</body>

</html>
