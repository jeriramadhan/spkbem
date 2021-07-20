<script>
    $(function() {
        $('#myModal').on('show.bs.modal', function() {
            var myModal = $(this);
            clearTimeout(myModal.data('hideInterval'));
            myModal.data('hideInterval', setTimeout(function() {
                myModal.modal('hide');
            }, 3000));
        });
    });
    $(document).ready(function() {
        var j = $('#table').DataTable({
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "targets": 0
            }],
            "language": {
                "search": "Pencarian",
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Maaf, data tidak ditemukan.",
                "info": "Tampilkan _PAGE_ dari _PAGES_ halaman",
                "infoEmpty": "Maaf, data kosong.",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "paginate": {
                    "previous": "Sebelumnya",
                    "next": "Selanjutnya"
                }
            },
            // "order": [
            //     [1, 'asc']
            // ],
            initComplete: function() {
                var input = $('.dataTables_filter input').unbind(),
                    self = this.api(),
                    $searchButton = $('<button>')
                    .text('Cari')
                    .click(function() {
                        self.search(input.val()).draw();
                    }),
                    $clearButton = $('<button>')
                    .text('Hapus')
                    .click(function() {
                        input.val('');
                        $searchButton.click();
                    })
                $('.dataTables_filter').append($searchButton, $clearButton);
            }
        })
        var t = $('#table2').DataTable({
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "targets": 0
            }],
            "language": {
                "search": "Pencarian",
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Maaf, data tidak ditemukan.",
                "info": "Tampilkan _PAGE_ dari _PAGES_ halaman",
                "infoEmpty": "Maaf, data kosong.",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "paginate": {
                    "previous": "Sebelumnya",
                    "next": "Selanjutnya"
                }
            },
            // initComplete: function() {
            // var input = $('.dataTables_filter input').unbind(),
            // self = this.api(),
            // $searchButton = $('<button>')
            // .text('Cari')
            // .click(function() {
            // self.search(input.val()).draw();
            // }),
            // $clearButton = $('<button>')
            // .text('Hapus')
            // .click(function() {
            // input.val('');
            // $searchButton.click();
            // })
            // $('.dataTables_filter').append($searchButton, $clearButton);
            // },
            // "order": [
            //     [1, 'asc']
            // ]
        });

        t.on('order.dt search.dt', function() {
            t.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function(cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();
        j.on('order.dt search.dt', function() {
            j.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function(cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();

    })
</script>