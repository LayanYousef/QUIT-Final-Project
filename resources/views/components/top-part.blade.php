<!--Top part, above nav-->
<div class="bg-slate-600 lg:px-5 lg:py-2  flex justify-between">

<!--FIRST GROUP-->
<div class="mr-0 flex justify-between">
 
@guest
<div class="mb-1 ml-1"><!--register-->
    <a href="/register" class="px-3 py-1  border border-white rounded-full text-white text-xs flex items-center" style="font-size: 10px;">
      تسجيل جديد
    </a>
  </div>
  <div class="mb-1 ml-1"><!--login-->
    <a href="/login" class="px-3 py-1  border border-white rounded-full text-white text-xs flex items-center" style="font-size: 10px;">
      تسجيل دخول
    </a>
  </div>
  @endguest

  @auth
  <form method="POST"  action="/logout">
    @csrf
  <div class="mb-1 ml-1"><!--logout-->
    <button type="submit" class="px-3 py-1  border border-white rounded-full text-white text-xs flex items-center" style="font-size: 10px;">
      تسجيل خروج
    </button>
  </div>
  </form>
  @endauth

<div class="mb-1 " ><!--userinfo-->
    <span style="font-size: 10px;">
        <select class="text-white bg-slate-600">
            <option value="userInfo" style="font-size: 10px;" class="text-white">معلومات المستخدم</option>
            <option value="ID" style="font-size: 10px;" class="text-white">الرقم الجامعي</option>
            <option value="name" style="font-size: 10px;" class="text-white">اسم المستخدم</option>
        </select>
    </span>
</div>

<div class="mb-1"> <!--calendar-->
    <a href="#" class="lg:px-3 px-2 py-1 text-white text-xs " style="font-size: 10px;">التقويم</a>
</div>

<div class="mb-1"> <!--news-->
    <a href="#" class="lg:px-3 px-2 py-1 text-white text-xs " style="font-size: 10px;">الأخبار</a>
</div>

@auth
<div class="mb-1"> <!--tags-->
    <a href="/data_post" class="lg:px-3 px-2 py-1 text-white text-xs " style="font-size: 10px;">مجاميع البيانات</a>
</div>

<div class="mb-1"> <!--data posts-->
    <a href="/tag" class="lg:px-3 px-2 py-1 text-white text-xs " style="font-size: 10px;">الوسوم</a>
</div>
@endauth

</div>

<!--SECOND GROUP-->
<div class="ml-0 flex justify-between"> 

<div class="mb-1"><!--Search icon-->
    <a href="#" class="px-3 py-1 border border-white rounded-full text-white text-xs flex items-center" style="font-size: 10px;">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607z" />
      </svg>
    </a>
  </div>
  <div class="mb-1"><!--home icon-->
    <a href="/" class="px-3 py-1 border border-white rounded-full text-white text-xs flex items-center" style="font-size: 10px;">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
     <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
    </svg>
  </a>
  </div>

</div>


</div>
<!--END OF !!!! Top part, above nav-->