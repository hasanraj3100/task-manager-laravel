<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Task Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body id="io3h">
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
          <a class="mr-5 hover:text-gray-900" href="/">Home</a>
          <a class="mr-5 hover:text-gray-900" href="#">Add Task</a>
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

    <!-- Form  -->

    <section class="text-gray-600 body-font relative">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
          <h1
            class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900"
          >
            Add a new task
          </h1>
        </div>
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
          <form id="ibzch" method="post" action="{{ route('task.saveTask') }}">
            @csrf 
            @method('post')
            <div class="flex flex-wrap -m-2">
              <div class="p-2 w-full">
                <div class="relative">
                  <label for="title" class="leading-7 text-sm text-gray-600"
                    >Title</label
                  >
                  <input
                    type="text"
                    id="title"
                    name="title"
                    required
                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                  />
                </div>
              </div>

              <div class="p-2 w-full">
                <div class="relative">
                  <label for="desc" class="leading-7 text-sm text-gray-600"
                    >Description</label
                  >
                  <textarea
                    id="desc"
                    name="desc"
                    required
                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-28 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
                  ></textarea>
                </div>
              </div>
              <div class="p-2 w-full">
                <div class="relative">
                  <label for="date" class="leading-7 text-sm text-gray-600"
                    >Due Date</label
                  >
                  <input
                    type="text"
                    id="date"
                    name="date"
                    required
                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                  />
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="priority" class="leading-7 text-sm text-gray-600"
                    >Priority</label
                  >
                  <select
                    name="priority"
                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-3 px-3 leading-8 transition-colors duration-200 ease-in-out"
                  >
                    <option value="1">High</option>
                    <option value="2">Medium</option>
                    <option value="3">Low</option>
                  </select>
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="tag" class="leading-7 text-sm text-gray-600"
                    >Tag</label
                  >
                  <select
                    name="tag"
                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-3 px-3 leading-8 transition-colors duration-200 ease-in-out"
                  >
                    <option value="1">Study</option>
                    <option value="2">Personal</option>
                    <option value="3">Work</option>
                  </select>
                </div>
              </div>
              <div class="p-2 w-full">
                <button
                  type="submit"
                  class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg"
                >
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
