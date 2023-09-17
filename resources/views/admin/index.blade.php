@extends('admin.app')
@section('content')
<div class="admin-panel d-flex w-100 relative">
   <div class="admin-menu d-flex flex-column text-center pt-3 relative">
      <p class="cms_title">Bella CMS</p>
      <nav class="menu-list d-flex flex-column mt-2">
         <p class="active-panel">Дашбоард</p>
         <p>Заказы</p>
         <p>Продукция</p>
         <p>Пользователи</p>
      </nav>
      <div class="user-status d-flex align-items-center">
         <img src="{{ asset('storage/public/admin_avatar.png') }}" alt="аватар">
         <p class="p-3">admin</p>
      </div>
   </div>
   <div class="admin-view">
      <div class="btn-to-welcome p-5">
         <a href="/">< На главную</a>
      </div>
      <div class="admin-wrapper">
         <div class="admin-track d-flex flex-column">
            <div class="admin-dashboard">
               <div class="dash-container d-flex flex-wrap">
                  <div class="dash-panels d-flex justify-content-between flex-wrap">
                     <div class="dash dash-orders-day">
                        <p>пицц заказано сегодня</p>
                        <p class="font-upper">12</p>
                     </div>
                     <div class="dash dash-orders-day">
                        <p>пицц заказано за месяц</p>
                        <p class="font-upper">331</p>
                     </div>
                     <div class="dash dash-orders-day">
                        <p>пицц заказано за неделю</p>
                        <p class="font-upper">79</p>
                     </div>
                     <div class="dash dash-orders-day">
                        <p>Средний чек (руб)</p>
                        <p class="font-upper">1071</p>
                     </div>
                  </div>
                  <div class="dash dash-main">
                     <p class="font-upper">13: 30</p>
                  </div>
               </div>
               <div class="dash dash-fun">
                  <p>Цитата дня</p>
                  <p class="font-upper">"Никогда не сдавайся"</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection