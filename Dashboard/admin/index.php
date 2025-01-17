<?php
require_once __DIR__ . '/../../app/database/Database.php';
require_once __DIR__ . '/../../app/class/categories.php';

$database = new Database();
$db = $database->connect();

$categories = new categories($db);
$query = "SELECT * FROM categories";
$stmt = $db->prepare($query);
$stmt->execute();
$categoriesList = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUCODE</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

</head>

<body class="bg-gray-50 font-sans antialiased min-h-screen">
    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 w-64 bg-blue-800 text-white transition-all duration-300 transform">
        <div class="flex items-center justify-center h-16 bg-blue-900">
            <h1 class="text-2xl font-bold">EDUCODE</h1>
        </div>
        <nav class="mt-8">
            <div class="px-4 space-y-2">
                <a href="#" class="flex items-center space-x-3 bg-blue-700 rounded-lg px-4 py-3 text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    <span>Dashboard</span>
                </a>
                <a href="#"
                    class="flex items-center space-x-3 hover:bg-blue-700 rounded-lg px-4 py-3 transition duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                    <span>Users</span>
                </a>
                <a href="#"
                    class="flex items-center space-x-3 hover:bg-blue-700 rounded-lg px-4 py-3 transition duration-200">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                        </path>
                    </svg>
                    <span>Courses</span>
                </a>
            </div>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="ml-64 p-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h2 class="text-3xl font-bold text-gray-800">Dashboard Overview</h2>
                <p class="text-gray-600">Welcome back, Admin</p>
            </div>
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Search..."
                        class="w-64 pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <svg class="w-5 h-5 text-gray-500 absolute left-3 top-2.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <button onclick="openAddModal()"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                    Add New Category
                </button>
            </div>
        </div>


        <!-- Users Table -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 border-b border-gray-100">
                <h3 class="text-xl font-semibold text-gray-800">Table des Catégories</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nom</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Description</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php if (!empty($categoriesList)): ?>
                            <?php foreach ($categoriesList as $category): ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap"><?php echo htmlspecialchars($category['id']); ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap"><?php echo htmlspecialchars($category['nom']); ?>
                                    </td>
                                    <td class=" px-4 py-2"><?php echo htmlspecialchars($category['description']); ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a onclick="openEditModal('<?php echo htmlspecialchars($category['id']); ?>', '<?php echo htmlspecialchars($category['nom']); ?>', '<?php echo htmlspecialchars($category['description']); ?>')"
                                            href="javascript:void(0);" class="text-blue-600 hover:text-blue-900">Modifier</a>
                                        <form action="../../app/action/admin/categorie/delete.php" method="GET" class="inline">
                                            <input type="hidden" name="id"
                                                value="<?php echo htmlspecialchars($category['id']); ?>">
                                            <button type="submit"
                                                class="text-red-600 hover:text-red-900 ml-2">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="px-6 py-4 text-center">Aucune catégorie trouvée.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="px-6 py-4 border-t border-gray-100">
                <div class="flex items-center justify-between">
                    <div class="text-sm text-gray-600">
                        Affichage de 2 sur 100 utilisateurs
                    </div>
                    <div class="flex space-x-2">
                        <button
                            class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-50 disabled:opacity-50">
                            Précédent
                        </button>
                        <button class="px-3 py-1 rounded border border-gray-300 text-gray-600 hover:bg-gray-50">
                            Suivant
                        </button>
                    </div>
                </div>
            </div>
        </div>



        <!-- Add Blog Modal -->
        <div id="addBlogModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white rounded-xl max-w-md w-full mx-4 shadow-2xl">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-black">Ajouter un Blog</h3>
                        <button onclick="closeAddModal()" class="text-gray-400 hover:text-white transition-colors"
                            aria-label="Fermer">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <form id="addBlogForm" action="../../app/action/admin/categorie/add.php" method="POST"
                        class="space-y-4" onsubmit="handleSubmit(event)">
                        <div>
                            <label for="categoryName" class="block text-sm font-medium text-gray-700 mb-2">Category
                                Name</label>
                            <input type="text" id="categoryName" name="categoryName" required
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-600 transition-all border border-gray-700"
                                placeholder="Enter the name of the category">
                            <div class="text-red-500 text-xs mt-1 hidden" id="categoryName"></div>
                        </div>

                        <div>
                            <label for="categoryDescription"
                                class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                            <textarea id="categoryDescription" name="categoryDescription" required
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-600 transition-all border border-gray-700"
                                rows="8" placeholder="Write a description"></textarea>
                            <div class="text-red-500 text-xs mt-1 hidden" id="categoryDescription"></div>
                        </div>

                        <div class="flex justify-end space-x-3 pt-4">
                            <button type="button" onclick="closeAddModal()"
                                class="px-4 py-2 bg-white text-black border-black border-2 rounded-lg hover:bg-black hover:text-white transition-colors">
                                Cancel
                            </button>
                            <button type="submit" id="submitBtn"
                                class="px-4 py-2 bg-black text-white border-black border-2 rounded-lg hover:bg-white hover:text-black transition-colors">
                                <span>Add</span>
                                <div id="loadingSpinner" class="hidden ml-2">
                                    <i class="fas fa-spinner fa-spin"></i>
                                </div>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <!-- Edit Blog Modal -->
        <div id="editBlogModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white rounded-xl max-w-md w-full mx-4 shadow-2xl">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-black">Edit Blog</h3>
                        <button onclick="closeEditModal()" class="text-gray-400 hover:text-white transition-colors"
                            aria-label="Fermer">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <form id="editBlogForm" action="../../app/action/admin/categorie/edit.php" method="POST"
                        class="space-y-4" onsubmit="handleSubmit(event)">
                        <input type="hidden" id="editCategoryId" name="id">
                        <div>
                            <label for="editCategoryName" class="block text-sm font-medium text-gray-700 mb-2">Category
                                Name</label>
                            <input type="text" id="editCategoryName" name="categoryName" required
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-600 transition-all border border-gray-700"
                                placeholder="Enter the name of the category">
                            <div class="text-red-500 text-xs mt-1 hidden" id="editCategoryNameError"></div>
                        </div>

                        <div>
                            <label for="editCategoryDescription"
                                class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                            <textarea id="editCategoryDescription" name="categoryDescription" required
                                class="w-full bg-gray-800 text-white rounded-lg px-4 py-2 focus:ring-2 focus:ring-purple-600 transition-all border border-gray-700"
                                rows="8" placeholder="Write a description"></textarea>
                            <div class="text-red-500 text-xs mt-1 hidden" id="editCategoryDescriptionError"></div>
                        </div>

                        <div class="flex justify-end space-x-3 pt-4">
                            <button type="button" onclick="closeEditModal()"
                                class="px-4 py-2 bg-white text-black border-black border-2 rounded-lg hover:bg-black hover:text-white transition-colors">
                                Cancel
                            </button>
                            <button type="submit" id="submitBtn"
                                class="px-4 py-2 bg-black text-white border-black border-2 rounded-lg hover:bg-white hover:text-black transition-colors">
                                <span>Save</span>
                                <div id="loadingSpinner" class="hidden ml-2">
                                    <i class="fas fa-spinner fa-spin"></i>
                                </div>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>



        <script>
            function openAddModal() {
                document.getElementById('addBlogModal').classList.remove('hidden');
                document.getElementById('addBlogModal').classList.add('flex');
            }

            function closeAddModal() {
                const modal = document.getElementById('addBlogModal');
                modal.classList.add('hidden');
                document.getElementById('addBlogForm').reset();
            }

            function openEditModal(id, name, description) {
                document.getElementById('editCategoryId').value = id;
                document.getElementById('editCategoryName').value = name;
                document.getElementById('editCategoryDescription').value = description;
                document.getElementById('editBlogModal').classList.remove('hidden');
                document.getElementById('editBlogModal').classList.add('flex');
            }

            function closeEditModal() {
                const modal = document.getElementById('editBlogModal');
                modal.classList.add('hidden');
                document.getElementById('editBlogForm').reset();
            }


            function deleteBlog(id) {
                if (confirm('Are you sure you want to delete this blog?')) {
                    window.location.href = '../../app/action/admin/bloger/delete.php?id=' + id;
                }
            }

        </script>
</body>

</html>