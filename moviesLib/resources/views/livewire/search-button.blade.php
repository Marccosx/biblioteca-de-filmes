<div>
    <div
    class="relative flex items-center transition-all duration-300"
    @mouseover="$wire.toggleHover(true)"
    @mouseleave="$wire.toggleHover(false)"
>
    <!-- Ícone dentro do input -->
    <span
        class="absolute left-2 iconify text-lg transition-opacity duration-300"
        :class="$wire.isHovered ? 'opacity-100' : 'opacity-100'"
        data-icon="ph:magnifying-glass-bold"
        style="width:20px; height:20px; color: #9c46e3;"
    ></span>

    <!-- Campo de texto -->
    <input
        type="text"
        placeholder="Pesquisar"
        class="pl-10 my-2 py-2 bg-gray-800 text-white rounded-md transition-all duration-300 border focus:outline-none focus:shadow-outline"
        :class="$wire.isHovered ? 'w-64' : 'opacity-0 w-10 cursor-pointer'"
    />
</div>
    
</div>
