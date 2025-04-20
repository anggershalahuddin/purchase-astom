// ----------TESTING SAJA

function showAlert() {
    alert("Hello World");
}

// ---------------------------------------------- UPLOAD MODAL -----------------------------------//
function openUploadModal() {
    const modal = document.getElementById("UploadModal");
    modal.classList.remove("hidden"); // Hilangkan hidden agar modal tampil
    setTimeout(() => {
        modal.classList.remove("opacity-0"); // Atur opacity menjadi penuh
        modal.querySelector("div").classList.remove("scale-95"); // Atur scale menjadi normal
    }, 10); // Sedikit delay untuk memastikan transisi diterapkan
}

document.getElementById("file").addEventListener("change", function (e) {
    const uploadIcon = document.getElementById("uploadIcon");
    const uploadText = document.getElementById("uploadText");

    if (e.target.files.length > 0) {
        // Ganti ikon ke ikon Excel
        uploadIcon.outerHTML = `
            <svg id="uploadIcon" class="w-8 h-8 mb-4 text-green-600" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2 2 2 0 0 0 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Z"
                    clip-rule="evenodd" />
            </svg>
        `;

        // Ganti teks jika ingin
        uploadText.innerHTML = `File selected: <strong>${e.target.files[0].name}</strong>`;
    }
});

function closeUploadModal() {
    const modal = document.getElementById("UploadModal");
    modal.classList.remove("opacity-100");
    modal.classList.add("opacity-0");

    setTimeout(() => {
        modal.classList.add("hidden");

        // RESET ICON + TEKS + FILE INPUT DI SINI LANGSUNG
        const uploadIconContainer = document.querySelector("#uploadIcon");
        if (uploadIconContainer) {
            uploadIconContainer.outerHTML = `
                <svg id="uploadIcon" class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                </svg>
            `;
        }

        const uploadText = document.getElementById("uploadText");
        if (uploadText) {
            uploadText.innerHTML = `Click to upload or drag and drop<br>XLS, XLSX, or CSV (MAX. 200kb)</br>`;
        }

        const fileInput = document.getElementById("file");
        if (fileInput) {
            fileInput.value = ""; // kosongkan input file
        }
    }, 300);
}

// ----------------------------------------------- ALERT SUCCESS MODAL ------------------------------//
function showAlertSuccessModal() {
    const modal = document.getElementById("alert-success");

    // Menghapus kelas hidden dan menambahkan kelas opacity-100 untuk transisi muncul
    modal.classList.remove("hidden");
    modal.classList.remove("opacity-0");
    modal.classList.add("opacity-100");
}

function closeAlertSuccessModal() {
    console.log("closeAlertSuccessModal function called");
    const alertModal = document.getElementById("alert-success");
    alertModal.classList.remove("opacity-100");
    alertModal.classList.add("opacity-0");

    setTimeout(() => {
        alertModal.style.display = "none";
    }, 300); // Durasi sesuai dengan transition-opacity (300ms)
}

// ----------------------------------------------- ALERT ERROR MODAL ------------------------------//

function closeAlertErrorModal() {
    const modal = document.getElementById("alert-error");
    if (modal) {
        // Menambahkan transisi opacity menjadi 0 (memudar)
        modal.classList.remove("opacity-100");
        modal.classList.add("opacity-0");

        // Menggunakan setTimeout untuk menunggu beberapa milidetik sebelum menyembunyikan modal
        setTimeout(() => {
            modal.classList.add("hidden");
        }, 300); // Sesuai dengan duration-300
    }
}
// ----------------------------------------------- DELETE MODAL ------------------------------//

function openDeleteMaterialModal(materialId) {
    const deleteForm = document.getElementById("deleteForm");
    // Menggunakan backticks (``) untuk menyisipkan variabel dalam URL
    deleteForm.action = `/materials/${materialId}`;

    const modal = document.getElementById("DeleteModal");
    modal.classList.remove("hidden");
    modal.classList.add("flex");

    // Menggunakan sedikit jeda untuk memastikan transisi berjalan
    setTimeout(() => {
        modal.classList.remove("opacity-0", "scale-95");
    }, 10);
}
function openDeleteProductModal(productId) {
    const deleteForm = document.getElementById("deleteForm");
    // Menggunakan backticks (``) untuk menyisipkan variabel dalam URL
    deleteForm.action = `/products/${productId}`;

    const modal = document.getElementById("DeleteModal");
    modal.classList.remove("hidden");
    modal.classList.add("flex");

    // Menggunakan sedikit jeda untuk memastikan transisi berjalan
    setTimeout(() => {
        modal.classList.remove("opacity-0", "scale-95");
    }, 10);
}
function closeDeleteModal() {
    // Menyembunyikan modal
    const modal = document.getElementById("DeleteModal");
    if (modal) {
        // Menambahkan transisi opacity menjadi 0 (memudar)
        modal.classList.remove("opacity-100");
        modal.classList.add("opacity-0");

        // Menggunakan setTimeout untuk menunggu beberapa milidetik sebelum menyembunyikan modal
        setTimeout(() => {
            modal.classList.add("hidden");
        }, 300); // Tunggu 300ms agar transisi opacity selesai sebelum menyembunyikan modal
    }
}

// ----------------------------------------------- DELETE ALL MODAL ------------------------------//

function openDeleteAllModal() {
    const modal = document.getElementById("DeleteAllModal");
    modal.classList.remove("hidden");
    modal.classList.add("flex");

    // Transisi animasi
    setTimeout(() => {
        modal.classList.remove("opacity-0", "scale-95");
        modal.classList.add("opacity-100", "scale-100");
    }, 10);
}

function closeDeleteAllModal() {
    const modal = document.getElementById("DeleteAllModal");
    modal.classList.remove("opacity-100");
    modal.classList.add("opacity-0");

    setTimeout(() => {
        modal.classList.add("hidden");
    }, 300);
}

// ------------------------ TOGGLE ACCORDING (LIST KESALAHAN DATA SAAT UPLOAD) --------------------//

function toggleAccordion(id) {
    const el = document.getElementById(id);
    if (el.style.maxHeight) {
        el.style.maxHeight = null;
    } else {
        el.style.maxHeight = el.scrollHeight + "px";
    }
}

// --------------------------------------------AJAX SEARCHING DATA ------------------------------//

document.getElementById("table-search").addEventListener("keyup", function () {
    const keyword = this.value.toLowerCase();
    const rows = document.querySelectorAll("tbody tr");

    rows.forEach((row) => {
        const text = row.innerText.toLowerCase();
        row.style.display = text.includes(keyword) ? "" : "none";
    });
});

// Event listener untuk dropdown perubahan jumlah entries per page
document
    .getElementById("entriesPerPage")
    .addEventListener("change", function () {
        const entriesPerPage = this.value; // Ambil nilai dari dropdown

        // Ambil URL yang sesuai untuk paginasi
        const currentPage = window.location.href.split("page=")[1] || 1; // Ambil nomor halaman saat ini, default ke 1
        const url = `/your-endpoint?page=${currentPage}&perPage=${entriesPerPage}`;

        // Lakukan permintaan AJAX ke server
        fetch(url)
            .then((response) => response.json())
            .then((data) => {
                // Perbarui isi tabel dengan data baru
                updateTable(data);
            })
            .catch((error) => console.error("Error:", error));
    });

// Fungsi untuk memperbarui tabel dengan data baru
function updateTable(data) {
    const tableBody = document.querySelector("table tbody");
    tableBody.innerHTML = ""; // Kosongkan tabel sebelumnya

    // Loop data dan masukkan ke dalam tabel
    data.materials.forEach((material) => {
        const row = document.createElement("tr");
        row.classList.add(
            "bg-white",
            "border-b",
            "dark:bg-gray-800",
            "dark:border-gray-700",
            "border-gray-200",
            "hover:bg-slate-100"
        );

        row.innerHTML = `
            <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">${material.index}</th>
            <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">${material.pecgi_code}</td>
            <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">${material.ai_code}</td>
            <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">${material.pecgi_name}</td>
            <td class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">${material.stock}</td>
            <td class="px-6 py-2 flex flex-row">
                <a href="/materials/${material.id}/edit" class="text-white bg-blue-700 hover:bg-blue-800 rounded-lg text-xs px-4 py-2 me-2">Edit</a>
                <button type="button" onclick="openDeleteModal(${material.id})" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 rounded-lg text-xs px-2 py-2">Delete</button>
            </td>
        `;
        tableBody.appendChild(row);
    });

    // Perbarui navigasi jika ada
    updatePagination(data.pagination);
}

// Fungsi untuk memperbarui navigasi pagination
function updatePagination(pagination) {
    const paginationContainer = document.querySelector(".pagination-container");
    paginationContainer.innerHTML = ""; // Kosongkan pagination sebelumnya

    // Loop untuk membuat tombol pagination
    pagination.links.forEach((link) => {
        const pageItem = document.createElement("li");
        pageItem.classList.add("page-item");

        const pageLink = document.createElement("a");
        pageLink.classList.add("page-link");
        pageLink.href = link.url;
        pageLink.innerText = link.label;

        pageItem.appendChild(pageLink);
        paginationContainer.appendChild(pageItem);
    });
}
