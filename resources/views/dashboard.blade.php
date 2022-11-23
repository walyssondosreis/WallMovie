<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    You're logged in!
                    <iframe width="560" height="315" src="https://drive.google.com/file/d/16UsOxilvbtJ42hk7dOBsAy1_URfUgIue" title="Player Google Drive" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://drive.google.com/file/d/1A8qD582-2ZHwk8ueNkPf6J987ogR4xe_/preview" title="Player Google Drive" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                
            
                    <video class="gdriveVideo" preload="auto" controls>
                        <source src="https://drive.google.com/uc?export=download&id=1A8qD582-2ZHwk8ueNkPf6J987ogR4xe_" type='video/mp4'>
                     </video>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
