<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Task Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <body id="imhm">
      <header class="text-gray-600 body-font">
        <div
          class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center"
        >
          <a
            class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0"
            ><span class="ml-3 text-xl">Task Manager</span></a
          >
          <nav
            class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center"
          >
            <a class="mr-5 hover:text-gray-900" href="#">Home</a>
            <a class="mr-5 hover:text-gray-900" href="/addtask">Add Task</a>
            <a class="mr-5 hover:text-gray-900">Profile</a>
          </nav>
          <button
            class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"
          >
            Logout<svg
              fill="none"
              stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              viewBox="0 0 24 24"
              class="w-4 h-4 ml-1"
            >
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>
      </header>
      <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div
            class="flex flex-wrap w-full mb-20 flex-col items-center text-center"
          >
            <h1
              class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"
            >
              Small wins, big goals 
            </h1>
          </div>
          <div class="flex flex-wrap -m-4">
            

            @foreach ($tasks as $task)

                @if ($task->finished == 0)
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg">
                            @switch( $task->priority)
                                @case(1)
                                <div class="w-100 h-10 p-3 inline-flex items-center justify-center rounded-full bg-red-100 text-red-500 mb-4">
                                    Priority: High
                                </div>
                                    @break 
                                @case(2) 
                                <div
                    class="w-100 h-10 p-3 inline-flex items-center justify-center rounded-full bg-sky-100 text-sky-500 mb-4"
                    >
                    Priority: Medium
                    </div>
                                    @break 
                                @case(3) 
                                <div
                    class="w-100 h-10 p-3 inline-flex items-center justify-center rounded-full bg-teal-100 text-teal-500 mb-4"
                    >
                    Priority: Low
                    </div>
                                    @break
                            @endswitch
                        
                        <div class="w-100 inline-flex items-center float-right">
                        
                        <form method="post" action="{{ route('task.complete') }}"> @csrf 
                            @method('post')
                        <input type="hidden" name="id" value="{{ $task->id }}" />
                        <button type="submit" class="rounded-lg bg-green-400 px-3 py-1">Completed
                            <svg class="h-6 w-6 text-black-500 inline-flex"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 12l5 5l10 -10" /></svg>
                        </button>
                        </form>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
                        {{ $task->title }}
                        </h2>
                        <p class="leading-relaxed text-base">
                        {{ $task->desc }}
                        </p>
                        <div style="padding: 18px 0px;">
                        <p class="text-pink-600">Due date: {{ $task->date }} </p>
                        </div>

                        @switch($task->tag)
                            @case(1) 
                            <div>
                    <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-5 py-2.5 rounded-full dark:bg-green-900 dark:text-green-300">
                        Study
                    </span>
                    </div>
                            @break 

                            @case(2) 

                            <div>
                    <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-5 py-2.5 rounded-full dark:bg-blue-900 dark:text-blue-300">
                        Personal
                    </span>
                    </div>

                            @break 

                            @case(3) 
                            <div>
                        <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-5 py-2.5 rounded-full dark:bg-red-900 dark:text-red-300">
                            Work
                        </span>
                        </div>
                            @break
                        @endswitch

                        
                    </div>
                    </div>
                @else 

                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-200 p-6 rounded-lg">
                            @switch( $task->priority)
                                @case(1)
                                <div class="w-100 h-10 p-3 inline-flex items-center justify-center rounded-full bg-red-100 text-red-500 mb-4 grayscale opacity-50">
                                    Priority: High
                                </div>
                                    @break 
                                @case(2) 
                                <div
                    class="w-100 h-10 p-3 inline-flex items-center justify-center rounded-full bg-sky-100 text-sky-500 mb-4 grayscale opacity-50"
                    >
                    Priority: Medium
                    </div>
                                    @break 
                                @case(3) 
                                <div
                    class="w-100 h-10 p-3 inline-flex items-center justify-center rounded-full bg-teal-100 text-teal-500 mb-4 grayscale opacity-50"
                    >
                    Priority: Low
                    </div>
                                    @break
                            @endswitch
                        
                        <div class="w-100 inline-flex items-center float-right">
                        <button class="rounded-lg bg-green-400 px-3 py-1 grayscale opacity-50">Completed
                            <svg class="h-6 w-6 text-black-500 inline-flex"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 12l5 5l10 -10" /></svg>
                        </button>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2 grayscale opacity-50">
                        {{ $task->title }}
                        </h2>
                        <p class="leading-relaxed text-base grayscale opacity-50">
                        {{ $task->desc }}
                        </p>
                        <div style="padding: 18px 0px;">
                        <p class="text-pink-600 grayscale opacity-50">Due date: {{ $task->date }} </p>
                        </div>

                        @switch($task->tag)
                            @case(1) 
                            
                    <span class="bg-green-100 text-green-800 text-sm font-medium me-2 px-5 py-2.5 rounded-full dark:bg-green-900 dark:text-green-300 grayscale opacity-50">
                        Study
                    </span>
                    
                            @break 

                            @case(2) 

                            
                    <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-5 py-2.5 rounded-full dark:bg-blue-900 dark:text-blue-300 grayscale opacity-50">
                        Personal
                    </span>
                    

                            @break 

                            @case(3) 
                            
                        <span class="bg-red-100 text-red-800 text-sm font-medium me-2 px-5 py-2.5 rounded-full dark:bg-red-900 dark:text-red-300 grayscale opacity-50">
                            Work
                        </span>
                        
                            @break
                        @endswitch

                        <div class="float-right" >
                        
                        <form method="post" action="{{route('task.delete', ['task' => $task]) }}">
                            @csrf 
                            @method('delete')
                        
                            <button type='submit'>
                            <svg class="h-8 w-8 text-red-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="3 6 5 6 21 6" />  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />  <line x1="10" y1="11" x2="10" y2="17" />  <line x1="14" y1="11" x2="14" y2="17" /></svg>
                            </button>
                        
                        </div>
                    </div>
                    
                    </div>

                @endif 
            @endforeach
           
            
            
            
            
            </div>
          </div>
        </div>
      </section>

    
  </body>
</html>
