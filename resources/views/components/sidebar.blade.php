<div class="fixed top-0 left-0 w-64 h-screen bg-gray-900 text-white p-6 space-y-4 transition-all duration-300">
    <h1 class="text-2xl font-bold mb-6"><i class="fas fa-wallet mr-2"></i> KeuanganApp</h1>
    
    <nav class="space-y-2">
        <a href="{{ route('dashboard') }}"
            class="block px-4 py-2 rounded {{ request()->routeIs('dashboard') ? 'bg-blue-700' : 'hover:bg-gray-700' }}">
            <i class="fas fa-home mr-2"></i> Dashboard
        </a>
        <a href="{{ route('transaksi.index') }}"
            class="block px-4 py-2 rounded {{ request()->routeIs('transaksi.*') ? 'bg-blue-700' : 'hover:bg-gray-700' }}">
            <i class="fas fa-money-bill-wave mr-2"></i> Transaksi
        </a>
        <a href="{{ route('profile.edit') }}"
            class="block px-4 py-2 rounded {{ request()->routeIs('profile.edit') ? 'bg-blue-700' : 'hover:bg-gray-700' }}">
            <i class="fas fa-user mr-2"></i> Profil
        </a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="w-full text-left px-4 py-2 rounded hover:bg-red-700">
                <i class="fas fa-sign-out-alt mr-2"></i> Logout
            </button>
        </form>
    </nav>
</div>
