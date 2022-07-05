<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm Password</title>
</head>
<body>
    <div class="mb-4 text-sm text-gray-600">
        This is a secure area of the application. Please confirm your password before continuing.
    </div>

    <form action="{{route('password.confirm')}}" method="POST">
        @csrf

        <div class="text-xl xs:text-lg mt-5">
            <label for="password">Password : <span class="text-[red]">*</span></label>
            <div class="flex items-center">
                <input type="password" id="password" name="password" class="form-inputs pr-12 password" required autocomplete="current-password">
                <i class="fa fa-eye-slash cursor-pointer hover:text-[#39190c] ml-[-40px] mt-2 password_eye"></i>
            </div>
            @error('password')
                <span class="block text-[red] text-sm pt-1 h-2">{{$message}}</span>
            @enderror
        </div>

        <div class="flex justify-end mt-4">
            <button type="submit" class="bg-[#39190c] text-white mt-8 w-full text-2xl py-2 rounded-md hover:text-[#39190c] hover:border-4 border-4 border-[#39190c] box-border hover:bg-transparent">Confirm</button>
        </div>
    </form>
</body>
</html>