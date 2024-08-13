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


<!--nav part-->
<x-nav-part></x-nav-part>
<!--END OF nav part!!!-->
<div class="flex justify-center mt-10">
<h1 class=" italic font-bold text-blue-500">الوسوم</h1>
</div>
<div class="flex justify-center mt-8">
<a href="/tag/create" class="text-blue-400 underline">أضف وسم جديد</a>
</div>
<!--display part-->
@foreach($tags as $tag)
<div class="flex flex-col justify-center gap-7 mt-10 px-4 py-6 border border-gray-200 rounded-lg max-w-md mx-auto">
  <div class="flex flex-row justify-center gap-7">
    <div class="flex-1 contents">
      <div class="text-gray-500 text-sm">
        <p>العنوان بالعربية : </p>
        <p>العنوان بالإنجليزية : </p>
      </div>
    </div>
    <div class="flex-1 contents">
      <div class="text-sm">
        <p class="text-gray-500">{{ $tag['english_name'] }}</p>
        <p class="text-gray-500">{{ $tag['arabic_name'] }}</p>
      </div>
    </div>
  </div>
  <div class="flex justify-around text-sm">
    <a href="/tag/{{ $tag['id'] }}" class="text-blue-500">عرض</a>
  </div>
</div>
@endforeach
<div class="flex flex-col justify-center gap-7 mt-10 px-4 py-6  max-w-md mx-auto">
  {{ $tags->links() }}<!--For Pagination-->
</div>

<!--Logo Footer part-->
<x-logo-footer></x-logo-footer>
<!--END OF LOGO FOOTER PART-->



</body>
</html>