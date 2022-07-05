<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register || {{env('APP_NAME')}}</title>
    <x-load-styles></x-load-styles>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            background: url('{{ asset('img/bg/auth-bg.jpg') }}')
        }
    </style>
</head>
    <body>
        <div class="flex flex-col items-center justify-center">
            <div class="flex items-center sm:mt-12">
                <img src="{{asset('img/logos/logo-3.png')}}" class="w-[150px] xs:w-[80px] mt-[-6px] mr-[-2rem] xs:m-0 xs:ml-[-8px]" alt="logo">
                <p class="font-Mussica_Swash text-5xl xs:text-3xl brand-logo font-bold xs:ml-[-10px]"><a href="{{route('home')}}"> {{env('APP_NAME')}}</a></p>
            </div>
            <div class="form-container w-[500px] xs:w-[90vw] xs:p-8 p-14 pb-8 mb-6 font-Galdeano bg-white/10">
                <form id="registerForm" action="{{route('register')}}">
                    @csrf
                    <h1 class="text-4xl xs:text-2xl font-semibold xs:text-center relative"> <span class="absolute bg-[#39190c] w-[0.3rem] h-full"></span> &nbsp;Create a new account</h1>

                    <div class="text-xl xs:text-lg mt-5">
                        <label for="username">Username : <span class="text-[red]">*</span> </label>
                        <input type="text" id="username" name="username" class="form-inputs mt-2 block rounded-md bg-transparent text-xl xs:text-lg focus:ring-[3px] focus:ring-[#7a2200] focus:outline-[1px] focus:outline-[#7a2200] focus:border-[#7a2200] outline-2 outline-transparent border-2 border-[#39190c] p-4 py-2 w-full" autofocus>
                        <span class="block text-[red] text-sm pt-1 h-2" id="username_r_e"></span>
                    </div>

                    <div class="text-xl xs:text-lg mt-5">
                        <label for="email">Email : <span class="text-[red]">*</span> </label>
                        <input type="email" id="email" name="email" class="form-inputs mt-2 block rounded-md bg-transparent text-xl xs:text-lg focus:ring-[3px] focus:ring-[#7a2200] focus:outline-[1px] focus:outline-[#7a2200] focus:border-[#7a2200] outline-2 outline-transparent border-2 border-[#39190c] p-4 py-2 w-full">
                        <span class="block text-[red] text-sm pt-1 h-2" id="email_r_e"></span>
                    </div>

                    <div class="text-xl xs:text-lg mt-5">
                        <label for="password">Password : <span class="text-[red]">*</span></label>
                        <div class="flex items-center">
                            <input type="password" id="password" name="password" class="form-inputs pr-12 password mt-2 block rounded-md bg-transparent text-xl xs:text-lg focus:ring-[3px] focus:ring-[#7a2200] focus:outline-[1px] focus:outline-[#7a2200] focus:border-[#7a2200] outline-2 outline-transparent border-2 border-[#39190c] p-4 py-2 w-full">
                            {{-- eye off --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer hover:text-[#39190c] ml-[-40px] mt-2 password_eye" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                            </svg>
                            {{-- eye --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 cursor-pointer hover:text-[#39190c] ml-[-40px] mt-2 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <span class="block text-[red] text-sm pt-1 h-2" id="password_r_e"></span>
                    </div>

                    <div class="text-xl xs:text-lg mt-5">
                        <label for="cPassword">Confirm Password : <span class="text-[red]">*</span></label>
                        <div class="flex items-center">
                            <input type="password" id="cPassword" name="password_confirmation" class="form-inputs pr-12 password mt-2 block rounded-md bg-transparent text-xl xs:text-lg focus:ring-[3px] focus:ring-[#7a2200] focus:outline-[1px] focus:outline-[#7a2200] focus:border-[#7a2200] outline-2 outline-transparent border-2 border-[#39190c] p-4 py-2 w-full">
                        </div>
                    </div>

                    <button type="submit" class="bg-[#39190c] text-white mt-8 w-full text-2xl py-2 rounded-md hover:text-[#39190c] hover:border-4 border-4 border-[#39190c] box-border hover:bg-transparent">Create Account</button>
                </form>

            </div>
            <div class="font-SnowPuppet text-2xl">
                <p>Already have an account ? <a class="underline text-[#7a2200] hover:text-[#39190c] hover:no-underline" href="{{route('login')}}">Sign In</a></p>
            </div>
            <div class="font-Galdeano mt-6 text-lg">
                <p>&copy {{env('APP_NAME')}} Inc 2022</p>
            </div>
        </div>

    <x-load-scripts></x-load-scripts>

    </body>
</html>