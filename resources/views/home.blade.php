<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>مكتبة البيانات المفتوحة</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

<!--Top part, above nav-->
<x-top-part></x-top-part>
<!--END OF !!!! Top part, above nav-->

<!--nav part-->
<x-nav-part></x-nav-part>
<!--END OF nav part!!!-->

<!--Search Data Part-->
<x-search></x-search>
<!-- END OF search data part!!!-->


<container class="contents ">

<!--menu part-->
<x-menu></x-menu>     
<!--END OF MENU PART!!-->

<!--filter svg-->
<div class="flex justify-center items-center ">
  <div class="font-mono mt-10 mr-8">

    <div class="flex items-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="blue" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
      </svg>
      <p class="text-gray-900 px-7 text-sm">5 مجموعة بيانات موجودة</p>
    </div>

  </div>
</div>
<!--END OF FILTER SVG-->

<!--catogry span for filter-->
<div class="flex justify-center items-center ">
  <div class="w-full max-w-md mx-4 my-5 sm:mx-0">
    <div class="flex space-x-4">

      <div class="w-1/3 mx-3">
        <select class="w-full px-4 py-2 text-gray-900 border border-gray-500 rounded text-xs">
          <option value="userInfo" class="text-gray-900">مجموعات</option>
          <option value="ID" class="text-gray-900">----</option>
          <option value="name" class="text-gray-900">----</option>
        </select>
      </div>

      <div class="w-1/3 mx-3">
        <select class="w-full px-4 py-2 text-gray-900 border border-gray-500 rounded text-xs">
          <option value="userInfo" disabled selected class="text-gray-900">الوسوم</option>
          <option value="ID" class="text-gray-900">----</option>
          <option value="name" class="text-gray-900">----</option>
        </select>
      </div>

      <div class="w-1/3 mx-3">
        <select class="w-full px-4 py-2 text-gray-900 border border-gray-500 rounded text-xs">
          <option value="userInfo" disabled selected class="text-gray-900">ترتيب بحسب</option>
          <option value="ID" class="text-gray-900">----</option>
          <option value="name" class="text-gray-900">----</option>
        </select>
      </div>
      
    </div>
  </div>
</div>
<!--END OF CATOGRY SPAN-->

<!--Main Part-->
<div class="flex lg:px-80 md:px-28 font-mono mt-10 lg:mr-14 md:mr-4"> 
    <div class="flex-1 ">

        <div class="flex flex-col mt-3.5 border border-gray-700 py-6 md:px-12 ">

                <h1 class="font-semibold lg:mr-2 md:mr-2">بيانات أعضاء هيئة التدريس</h1>
                <!--Icons-->
                <div class="mt-3 py-2 lg:px-5 md:px-6 text-gray-300 flex flex-row "> 

                    <p class=" text-gray-900" style="font-size: xx-small;">3.0</p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="yellow" class="w-3 h-3 mr-1 ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                      </svg>                      
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="w-3 h-3 mr-3 ml-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                      </svg>
                      <p class="text-gray-900" style="font-size: xx-small;">2059</p>
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray" class="w-3 h-3 mr-3 ml-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                      </svg>
                      <p class="text-xs text-gray-900" style="font-size: xx-small;">20</p>
                </div>
    
                <div class="mb-1 text-gray-900">
                    <p class="mr-2">بيانات أعضاء هيئة التدريس بيانات أعضاء هيئة التدريس بيانات أعضاء هيئة التدريس</p>
                </div>

                <div class="flex mt-2"> <!--buttons-->
                    <div class="mb-1 ml-1">
                      <a href="https://myqu.qu.edu.sa/_IAM/login" class="px-3 py-1 bg-yellow-500 text-xs items-center mr-1 text-white ">
                        XLSX
                      </a>
                    </div>
                    <div class="mb-1 ml-1">
                      <a href="https://myqu.qu.edu.sa/_IAM/login" class="px-3 py-1 bg-blue-500 text-xs items-center mr-1 text-white">
                        CSV
                      </a>
                    </div>
                    <div class="text-gray-400 text-xs mr-36" >تاريخ اخر تحديث : 11-7-2024</div>
                  </div>


     </div>
  </div>
</div>
<!--END OF MAIN PART-->

</container>


<!--Logo Footer part-->
<x-logo-footer></x-logo-footer>
<!--END OF LOGO FOOTER PART-->



</body>
</html>