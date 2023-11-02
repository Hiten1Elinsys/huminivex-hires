$(document).ready(function() {
    $(".datatable").DataTable({
        lengthMenu: [5, 10, 25, 50],
        pageLength: 5,
        language: {
            paginate: {
                previous: "<i class='mdi mdi-chevron-left'>",
                next: "<i class='mdi mdi-chevron-right'>"
            }
        },
        drawCallback: function() {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
        }
        }), $(".dataTables_length select").addClass("form-select form-select-sm")
    });
