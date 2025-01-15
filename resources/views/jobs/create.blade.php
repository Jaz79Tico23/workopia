<x-layout>
   <x-slot name='title'>Workopia | Create Job</x-slot>
   <h1>Create New Job</h1>
   <form action="/jobs" method="POST">
      @csrf
      <input type="text" name="title" placeholder="title" /><br /><br />
      <input type="text" name="description" placeholder="description" /><br /><br />
      <button type="submit">submit</button>
   </form>
</x-layout>