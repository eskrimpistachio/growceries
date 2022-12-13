<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-black inline-flex items-center px-24 py-2 my-4 bg-[#A7C957] border border-transparent rounded-2xl font-bold text-sm uppercase hover:bg-[#386641] active:bg-[#386641] focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
