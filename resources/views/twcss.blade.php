<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-black-200">
            <label class="block">
              <span class="text-gray-700">Name</span>
              <input class="form-input mt-1 block w-full" placeholder="Jane Doe">
            </label>

            <div class="mt-4">
              <span class="text-gray-700">Account Type</span>
              <div class="mt-2">
                <label class="inline-flex items-center">
                  <input type="radio" class="form-radio" name="accountType" value="personal">
                  <span class="ml-2">Personal</span>
                </label>
                <label class="inline-flex items-center ml-6">
                  <input type="radio" class="form-radio" name="accountType" value="busines">
                  <span class="ml-2">Business</span>
                </label>
              </div>
            </div>

            <label class="block mt-4">
              <span class="text-gray-700">Requested Limit</span>
              <select class="form-select mt-1 block w-full">
                <option>$1,000</option>
                <option>$5,000</option>
                <option>$10,000</option>
                <option>$25,000</option>
              </select>
            </label>

            <div class="flex mt-6">
              <label class="flex items-center">
                <input type="checkbox" class="form-checkbox">
                <span class="ml-2">I agree to the <span class="underline">privacy policy</span></span>
              </label>
            </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>