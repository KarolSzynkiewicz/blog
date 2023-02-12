<x-wrapper>

<div class="flex flex-wrap -mx-3">
    <div class="relative z-20 w-full max-w-full px-3 lg:flex-0 shrink-0 ">
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-transparent border-0 border-solid shadow-none border-black-125 rounded-2xl bg-clip-border">
    <div class="flex-auto p-4">
    <div class="flex flex-wrap -ml-3">
    <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 lg:w-6/12">
    <div class="flex flex-col h-full">
        <div class="flex justify-between">
            <div class="left"><h2 class="mb-0 font-bold dark:text-white">Zlecenie Transportowe {{ $transportOrder->id  }}</h2></div>
            <div class="right"><x-button><a href="/orders/{{ $transportOrder->id  }}/edit">edytuj</a></x-button><x-button>usuń</x-button></div>
          </div>


    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="flex flex-wrap -mx-3">
    <div class="w-full max-w-full px-3 sm:flex-0 shrink-0 sm:w-6/12 lg:w-5/12">
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white dark:bg-gray-950 shadow-soft-xl dark:shadow-soft-dark-xl rounded-2xl bg-clip-border">
    <div class="flex-auto p-4">
    <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-2/3 max-w-full px-3">
    <div>
    <p class="mb-0 font-sans font-semibold leading-normal text-sm dark:opacity-60">Data załadunku</p>
    <h5 class="mb-0  dark:text-white">
    {{ $transportOrder->loading_date }}

    </h5>
    </div>
    </div>
    <div class="w-4/12 max-w-full px-3 text-right flex-0">
    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl shadow-soft-2xl">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z"/>
            <path d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm-2 2H9v2H7V5H4v4h16V5h-3v2h-2V5zm5 6H4v8h16v-8z"/>
          </svg>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-gray-950 shadow-soft-xl dark:shadow-soft-dark-xl rounded-2xl bg-clip-border">
    <div class="flex-auto p-4">
    <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-2/3 max-w-full px-3">
    <div>
    <p class="mb-0 font-sans font-semibold leading-normal text-sm dark:opacity-60">Data rozładunku</p>
    <h5 class="mb-0  dark:text-white">
    {{ $transportOrder->unloading_date}}

    </h5>
    </div>
    </div>
    <div class="w-4/12 max-w-full px-3 text-right flex-0">
    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl shadow-soft-2xl">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0z"/>
            <path d="M17 3h4a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4V1h2v2h6V1h2v2zm-2 2H9v2H7V5H4v4h16V5h-3v2h-2V5zm5 6H4v8h16v-8z"/>
          </svg>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="w-full max-w-full px-3 mt-6 sm:flex-0 shrink-0 sm:mt-0 sm:w-6/12 lg:w-5/12">
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white dark:bg-gray-950 shadow-soft-xl dark:shadow-soft-dark-xl rounded-2xl bg-clip-border">
    <div class="flex-auto p-4">
    <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-2/3 max-w-full px-3">
    <div>
    <p class="mb-0 font-sans font-semibold leading-normal text-sm dark:opacity-60">Miejsce załadunku</p>
    <h5 class="mb-0  dark:text-white">
        {{ $transportOrder->loading_address }}

    </h5>
    </div>
    </div>
    <div class="w-4/12 max-w-full px-3 text-right flex-0">
    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl shadow-soft-2xl">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="#000000" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/>
          </svg>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="relative flex flex-col min-w-0 break-words bg-white dark:bg-gray-950 shadow-soft-xl dark:shadow-soft-dark-xl rounded-2xl bg-clip-border">
    <div class="flex-auto p-4">
    <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-2/3 max-w-full px-3">
    <div>
     <p class="mb-0 font-sans font-semibold leading-normal text-sm dark:opacity-60">Miejsce rozładunku</p>
    <h5 class="mb-0  dark:text-white">
    {{ $transportOrder->unloading_address }}
    </h5>
    </div>
    </div>
    <div class="w-4/12 max-w-full px-3 text-right flex-0">
    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl shadow-soft-2xl">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
            <path fill="#000000" d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/>
          </svg>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="flex flex-wrap mt-6 -mx-3">
    <div class="w-full max-w-full px-3 flex-0 lg:w-10/12">
    <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid dark:bg-gray-950 border-black-125 shadow-soft-xl dark:shadow-soft-dark-xl rounded-2xl bg-clip-border">
    <div class="p-4 pb-0 mb-0 rounded-t-4">
    <div class="flex justify-between">
        <p class="mb-0 font-sans font-semibold leading-normal text-sm dark:opacity-60">Szczegóły zlecenia</p>
    </div>
    </div>
    <div class="overflow-x-auto ps">
    <table class="items-center w-full mb-4 align-top border-gray-200 dark:border-white/40">
    <tbody>

    <tr>
    <td class="p-2 align-middle bg-transparent border-b w-4/10 whitespace-nowrap dark:border-white/40">
    <div class="flex items-center px-2 py-1">

    <div class="ml-6">
    <p class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">Dystans</p>
    <h6 class="mb-0 leading-normal text-sm dark:text-white">500</h6>
    </div>
    </div>
    </td>
    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
    <div class="text-center">
    <p class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">KM PUSTE:</p>
    <h6 class="mb-0 leading-normal text-sm dark:text-white">50</h6>
    </div>
    </td>
    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
    <div class="text-center">

    </div>
    </td>
    <td class="p-2 leading-normal align-middle bg-transparent border-b text-sm whitespace-nowrap dark:border-white/40">
    <div class="flex-1 text-center">
        <p class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">KM Ładowne:</p>
        <h6 class="mb-0 leading-normal text-sm dark:text-white">450 (90%)</h6>
    </div>
    </td>
    </tr>
    <tr>
    <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap dark:border-white/40">
    <div class="flex items-center px-2 py-1">

    <div class="ml-6">
    <p class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">Kierowca</p>
    <h6 class="mb-0 leading-normal text-sm dark:text-white">Grzegorz Kierownica</h6>
    </div>
    </div>
    </td>
    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
    <div class="text-center">
    <p class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">Auto:</p>
    <h6 class="mb-0 leading-normal text-sm dark:text-white">GD6054U</h6>
    </div>
    </td>
    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap dark:border-white/40">
    <div class="text-center">

    </div>
    </td>
    <td class="p-2 leading-normal align-middle bg-transparent border-b text-sm whitespace-nowrap dark:border-white/40">
    <div class="flex-1 text-center">
        <p class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">Naczepa:</p>
        <h6 class="mb-0 leading-normal text-sm dark:text-white">GD6054U</h6>

    </div>
    </td>
    </tr>
    <tr>
    <td class="p-2 align-middle bg-transparent border-0 w-3/10 whitespace-nowrap">
    <div class="flex items-center px-2 py-1">

    <div class="ml-6">
    <p class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">Kontrahent</p>
    <h6 class="mb-0 leading-normal text-sm dark:text-white">Spedycja sp. zoo</h6>
    </div>
    </div>
    </td>
    <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
    <div class="text-center">
    <p class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">Nip:</p>
    <h6 class="mb-0 leading-normal text-sm dark:text-white">0123456789</h6>
    </div>
    </td>
    <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">

    </td>
    <td class="p-2 leading-normal align-middle bg-transparent border-0 text-sm whitespace-nowrap">
    <div class="flex-1 text-center">
    <p class="mb-0 font-semibold leading-tight text-xs dark:opacity-60">Dług:</p>
    <h6 class="mb-0 leading-normal text-sm dark:text-white">500e (+30%)</h6>

    </div>

    </td>

    </tr>

    </tbody>

    </table>
    <div class="flex flex-col justify-center items-center p-3 mb-4">
        <p class="mb-0 font-semibold leading-tight text-red-600 text-xs dark:opacity-60">warning: wykryto przetrminowane faktury!</p>
    </div>


    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
    </div>
    </div>
    </div>
    </div>
    </div>
</x-wrapper>
