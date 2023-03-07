@extends('layouts.layout')

@section('title')
WELCOME - E-Library System
@endsection

@section('content')
<div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <img src="/image/library_copy.png" alt="">
        </div>

        <div class=" mx-auto bg-white dark:bg-gray overflow-hidden shadow sm:rounded-lg " style="width:28rem; height:16rem; ">
            <div class="relative grid grid-cols-1" >
                <div class="p-6 border-t  md:border-l" >
                    <div class="mx-auto justify-center flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-book" viewBox="0 0 18 18">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                        </svg>
                        <div class=" text-lg leading-7 font-semibold text-gray-800 dark:text-white-400 w-auto"> <!--edit-->
                        @if(isset($name))
                            WELCOME, {{$name}}!
                        @else
                            WELCOME, Guest!
                        @endif
                        </div>
                    </div>

                    <div class="ml-2">
                        <div class=" mt-4 text-gray-600 dark:text-gray-400 text-sm">
                            This is the E-Library System, a collection of books and has features that allows users manage its information. Utilizing a library system organize the books and perform tasks in a simple, quick, and productive way.
                        </div>
                        <div class="mt-4 text-md mx-auto justify-center flex items-center">
                            <button type="button" class="btn btn-outline-dark"><a href="/books">
                                View Books
                            </a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0" style="margin-top: 1rem">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>

        
    </div>
</div>
@endsection

