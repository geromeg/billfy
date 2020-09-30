<template>
<div>   
    <nav class="text-sm font-semibold mb-6" aria-label="Breadcrumb">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center text-blue-500">
                <a href="#" class="text-gray-700">Home</a>
                <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>
            </li>
            <li class="flex items-center">
                <a href="#" class="text-gray-600">Invoices</a>
            </li>
        </ol>
    </nav>
     <div class="lg:flex justify-between items-center mb-6">
            <button class="bg-blue-500 hover:bg-blue-600 focus:outline-none rounded-lg px-6 py-2 text-white font-semibold shadow">Create Invoice</button>
     </div>
     <table class="flex-grow w-full">
        <thead class="bg-gray-400 text-left">
            <tr>
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Customer</th>
                <th class="px-4 py-2">Date</th>
                <th class="px-4 py-2">Total</th>
                <th class="px-4 py-2">Line Items</th>
                <th class="px-4 py-2">Status</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border px-4 py-2">1001</td>
                <td class="border px-4 py-2">Adam</td>
                <td class="border px-4 py-2">23 Jul 2020</td>
                <td class="border px-4 py-2">$200.00</td>
                <td class="border px-4 py-2">10</td>
                <td class="border px-4 py-2"><span class="bg-green-500 text-white rounded p-2">paid</span></td>
                <td class="border px-4 py-2">
              
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">1002</td>
                <td class="border px-4 py-2">Adam</td>
                <td class="border px-4 py-2">23 Jul 2020</td>
                <td class="border px-4 py-2">$200.00</td>
                <td class="border px-4 py-2">10</td>
                <td class="border px-4 py-2"><span class="bg-yellow-500 text-black rounded p-2">sent</span></td>
                <td class="border px-4 py-2"></td>
            </tr>
              <tr>
                <td class="border px-4 py-2">1003</td>
                <td class="border px-4 py-2">Adam</td>
                <td class="border px-4 py-2">23 Jul 2020</td>
                <td class="border px-4 py-2">$200.00</td>
                <td class="border px-4 py-2">10</td>
                <td class="border px-4 py-2"><span class="bg-red-500 text-white rounded p-2">unpaid</span></td>
                <td class="border px-4 py-2">
                </td>
            </tr>
        </tbody>
    </table>
</div>
 

</template>

<script>
export default {

}
</script>

<style>

</style>