

<x-guest-layout>
    {{-- @push('style') gọi name  để dùng dc @stack('style')ở views/layouts/guest.blade.php --}}
@push('style') 
      <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:#0f172a;
            overflow:hidden;
        }

        .bg{
            position:fixed;
            inset:0;
            background:
        radial-gradient(circle at top left,#2563eb,transparent 30%), 
        radial-gradient(circle at bottom right,#9333ea,transparent 35%), 
        radial-gradient(circle at center,#0f172a,transparent 60%), #020617;
        }

.wrap{ 
    position:relative; 
    z-index:2; 
    width:100%; 
    max-width:900px; /* tăng thêm */ 
    padding:30px; 
}

        .card{
    width:100%; 
    max-width:700px; /* thêm dòng này */ margin:auto; /* canh giữa */
    background:rgba(255,255,255,0.08); 
    backdrop-filter:blur(18px); 
    border:1px solid rgba(255,255,255,0.12); 
    border-radius:28px;
    padding:70px; /* 55px -> 70px */ 
    box-shadow: 0 20px 50px rgba(0,0,0,0.45), inset 0 1px 1px rgba(255,255,255,0.08);  }

        h1{
      color:white;
       margin-bottom:35px; 
       text-align:center; 
       font-size:42px; 
       font-weight:700; 
       letter-spacing:.5px;
        }

        .field{
margin-bottom:22px;
        }

        .input{
  width:100%; 
  padding:22px 24px; /* 18px 20px -> 22px 24px */ 
  border:none; 
  outline:none; 
  border-radius:16px; 
  background:rgba(255,255,255,0.09);
   border:1px solid rgba(255,255,255,0.08); 
   color:white; 
   font-size:17px; /* 16px -> 17px */ 
   transition:.3s;
        }

.input:focus{ 
    border:1px solid #3b82f6;
     background:rgba(255,255,255,0.13); 
     box-shadow:0 0 15px rgba(59,130,246,.35); 
    }

        .input::placeholder{
color:#cbd5e1;
        }

        .check{
           display:flex; 
           align-items:center; 
           gap:10px; 
           margin-bottom:28px; 
           color:white; 
           font-size:15px;
        }

        .btn{
     width:100%; 
     padding:17px;
      border:none; 
      border-radius:16px; 
      background:linear-gradient(135deg,#2563eb,#7c3aed); 
      color:white; 
      font-size:17px; 
      font-weight:700; 
      cursor:pointer; 
      transition:.3s; 
      letter-spacing:.4px; 
      box-shadow:0 10px 25px rgba(37,99,235,.35);
        }

        .btn:hover{
transform:translateY(-2px); 
box-shadow:0 15px 30px rgba(37,99,235,.45);  
      }

        .help{
         margin-top:24px; 
         text-align:center; 
         color:#cbd5e1; 
         font-size:14px; 
         line-height:1.6;
        }

        .error{
            margin-top:8px;
            font-size:13px;
            color: yellow;
            opacity:.95;
        }
        #remember{
    width:18px;
    height:18px;
    accent-color:#ebd725;
    cursor:pointer;
}
@media(max-width:640px){ .wrap{ padding:20px; } .card{ padding:35px 25px; border-radius:22px; } h1{ font-size:32px; } }
    </style>
@endpush
{{-- copy từ file mẫu --}}
<div class="bg" aria-hidden="true"></div>

<main class="wrap">
    
    <div class="card">
          
        <h1>Đăng nhập</h1>
 {{-- copy từ file mẫu --}}


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        {{-- <div> --}}
        <div class="field">
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            {{-- <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" /> --}}
            <x-text-input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        {{-- <div class="mt-4"> --}}
        <div class="field">
            {{-- <x-input-label for="password" :value="__('Password')" /> --}}
{{-- 
            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" /> --}}
            <x-text-input id="password" class="input" type="password" name="password"  required autocomplete="current-password" />


            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        {{-- <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> --}}
        {{-- copy --}}
           <div class="check">
                <input
                    id="remember"
                    type="checkbox"
                    name="remember"
                >

                <label for="remember">
                   {{ __('Remember me') }}
                </label>
            </div>
{{-- copy --}}

<div class="action">
{{-- <div class="flex items-center justify-end mt-4"> --}}
            {{-- cái  Forgot password tự làm --}}
            {{-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif --}}

            {{-- <x-primary-button class="ms-3"> --}}
            <x-primary-button type="submit" class="btn">
                {{ __('Đăng nhập') }}
            </x-primary-button>

            <p class="help">
                Hỗ trợ kỹ thuật 0842460196 - Zalo
            </p>
        </div>
    </form>
    
    {{-- copy từ file mẫu --}}
    </div>

</main>
 {{-- copy từ file mẫu --}}


</x-guest-layout>
