<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
</head>
<body>
    <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <!-- Password reset token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="text-xl xs:text-lg mt-5">
            <label for="email">Email : <span class="text-[red]">*</span> </label>
            <input type="email" id="email" name="email" class="form-inputs" value="{{old('email')}}" autofocus required>
            @error('email')
                <span class="block text-[red] text-sm pt-1 h-2">{{$message}}</span>
            @enderror
        </div>

        <div class="text-xl xs:text-lg mt-5">
            <label for="password">Password : <span class="text-[red]">*</span></label>
            <div class="flex items-center">
                <input type="password" id="password" name="password" class="form-inputs pr-12 password" required>
                <i class="fa fa-eye-slash cursor-pointer hover:text-[#39190c] ml-[-40px] mt-2 password_eye"></i>
            </div>
            @error('password')
                <span class="block text-[red] text-sm pt-1 h-2">{{$message}}</span>
            @enderror
        </div>

        <div class="text-xl xs:text-lg mt-5">
            <label for="cPassword">Confirm Password : <span class="text-[red]">*</span> </label>
            <div class="flex items-center">
                <input type="password" id="cPassword" name="password_confirmation" class="form-inputs" required>
                <i class="fa fa-eye-slash cursor-pointer hover:text-[#39190c] ml-[-40px] mt-2 password_eye"></i>
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="bg-[#39190c] text-white mt-8 w-full text-2xl py-2 rounded-md hover:text-[#39190c] hover:border-4 border-4 border-[#39190c] box-border hover:bg-transparent">Reset Password</button>
        </div>

    </form> 
</body>
</html>