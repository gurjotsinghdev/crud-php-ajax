<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>CRUD APP</title>
</head>

<body>
    <div class="container mx-auto p-8">
        <h2 class="text-4xl py-8"> CRUD App using php/ajax </h2>
        <div>
            <h3 class="text-lg"> All users in database </h3>
            <button data-toggle="modal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> Add New User</button>
            

        </div>
        <div>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full">
                                <thead class="bg-white border-b">
                                    <tr>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            ID
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            First
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Last
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Email
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Phone
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Action
                                        </th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-gray-100 border-b">
                                        <?php  for ($i=0; $i< 11; $i++): ?>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"> <?php echo $i ?> </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            user <?php echo $i ?>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            title <?php echo $i ?>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            gurjotsingh<?php echo $i ?>@gmail.com
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            1231231231
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <a href="#">View </a> | 
                                            <a href="#">Edit </a> | 
                                            <a href="#">Delete </a>  

                                        </td>
                                        
                                    </tr>
                                    <?php endfor; ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>