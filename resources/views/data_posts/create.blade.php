<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Open Data Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

<!--Top part, above nav-->
<x-top-part></x-top-part>
<!--END OF !!!! Top part, above nav-->


<div class="flex justify-center mt-10">
<h1 class="underline italic font-bold text-blue-500">أضف منشور جديد</h1>
</div>
<!--display part-->

<div class="flex flex-col justify-center gap-7 mt-10 px-4 py-6 border border-gray-200 rounded-lg max-w-md mx-auto">
  <div class="flex flex-row justify-center gap-7">
    <div class="flex-1 contents">

     
<form method="POST" action="/data_post"><!-- csrf have hidden unique token -->
    @csrf
    
  <div class="space-y-12">

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

        <x-form-field class="sm:col-span-4">
          <x-form-label for="arabic_title">العنوان بالعربية : </x-form-label>
          <div class="mt-2">
            <x-form-input name="arabic_title" id="arabic_title"  required/>
            <!--Error for a single input-->
            <x-form-error name="arabic_title"/>

          </div>
          </x-form-field>

        <x-form-field class="sm:col-span-4">
         <x-form-label for="english_title">العنوان بالإنجليزية</x-form-label>
          <div class="mt-2">
          <x-form-input name="english_title" id="english_title"  required/>
            <!--Error for a single input-->
            <x-form-error name="english_title"/>
          </div>
        </x-form-field>

        <x-form-field class="sm:col-span-4">
         <x-form-label for="league_update">التحديث الدوري</x-form-label>
          <div class="mt-2">
          <x-form-input name="league_update" id="league_update"  required/>
            <!--Error for a single input-->
            <x-form-error name="league_update"/>
          </div>
        </x-form-field>

        <x-form-field class="sm:col-span-4">
         <x-form-label for="status">الحالة</x-form-label>
          <div class="mt-2">
          <x-form-input name="status" id="status"  required/>
            <!--Error for a single input-->
            <x-form-error name="status"/>
          </div>
        </x-form-field>

      </div>
    </div> 
  </div>
  
  </div>
  </div>
  <div class="flex justify-around text-sm">
  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/data_post" class="text-sm font-semibold leading-6 text-gray-900 underline">تراجع</a>
    <x-form-button type="submit">حفظ</x-form-button>
</form>
  </div>
  </div>
</div>

<!--End of Display Part-->

<!--Logo Footer part-->
<x-logo-footer></x-logo-footer>
<!--END OF LOGO FOOTER PART-->



</body>
</html>