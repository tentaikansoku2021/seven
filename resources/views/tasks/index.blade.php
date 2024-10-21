<x-layout>
    <main class="grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="py-[100px]">
                <p class="text-2xl font-bold text-center">今日は何する？</p>
                <form action="{{route('tasks.store')}}" method="POST" class="mt-10">
                    @csrf
                   
                    <div class="flex flex-col items-center">
                        <label for="w-full max-w-3xl mx-auto">
                            <input
                                class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-4 pl-4 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                                placeholder="洗濯をする..." type="text" name="task_name">
                        </label>
                        <button type="submit" class="mt-8 p-4 bg-slate-800 text-white w-full max-w-xs hover:bg-slate-900 transition-colors">追加する</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-layout>