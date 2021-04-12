<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-green-500 border border-green-500 px-2 py-2 w-full test-gray-900 rounded']) }}>
    {{ $slot }}
</button>
