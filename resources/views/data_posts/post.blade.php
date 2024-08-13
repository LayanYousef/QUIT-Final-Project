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

<!--END OF nav part!!!-->
<div class="flex justify-center mt-10">
<h1 class="underline italic font-bold text-blue-500">مجاميع البيانات</h1>
</div>
<!--display part-->
<div class="flex flex-col justify-center gap-7 mt-10 px-4 py-6 border border-gray-200 rounded-lg max-w-md mx-auto">
  <div class="flex flex-row justify-center gap-7">
    <div class="flex-1 contents">
      <div class="text-gray-500 text-sm">
        <p>العنوان بالعربية : </p>
        <p>العنوان بالإنجليزية : </p>
        <p>التحديث الدوري : </p>
        <p>الحالة : </p>
        <p>نشر بواسطة :</p>
      </div>
    </div>
    <div class="flex-1 contents">
      <div class="text-sm">
        <p class="text-gray-500">{{ $data_post->arabic_title }}</p>
        <p class="text-gray-500">{{ $data_post->english_title }}</p>
        <p class="text-gray-500">{{ $data_post->league_update }}</p>
        <p class="text-gray-500">{{ $data_post->status }}</p>
        <p class="text-gray-500">{{ $data_post->user->name }}</p>

      </div>
    </div>
  </div>
  <div class="flex justify-around text-sm">
    <a href="/data_post/{{ $data_post->id }}/edit" class="text-blue-500">تعديل</a>

    <form method="POST" action="/data_post/{{ $data_post->id }}">
      @csrf
      @method('DELETE')
      <button class="text-red-500 underline">حذف</button>
    </form>

  </div>
</div>
<!--END OF display part!!!-->


<!--Logo Footer part-->
<x-logo-footer></x-logo-footer>
<!--END OF LOGO FOOTER PART-->



</body>
</html>