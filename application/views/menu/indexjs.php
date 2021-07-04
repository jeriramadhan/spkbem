<script>
    $(document).ready(function() {
        $('#table').DataTable({
                'paging': true,
                'lengthChange': false,
                // 'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': true,
                "language": {
                    "search": "Pencarian",
                    "paginate": {
                        "previous": "Sebelumnya",
                        "next": "Selanjutnya"
                    }
                },
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
            }),
            $('#table2').DataTable({
                'paging': true,
                'lengthChange': false,
                // 'searching': true,
                'ordering': true,
                'info': true,
                'autoWidth': true,
                "language": {
                    "search": "Pencarian",
                    "paginate": {
                        "previous": "Sebelumnya",
                        "next": "Selanjutnya"
                    }
                },
                // initComplete: function() {
                //     var input = $('.dataTables_filter input').unbind(),
                //         self = this.api(),
                //         $searchButton = $('<button>')
                //         .text('Cari')
                //         .click(function() {
                //             self.search(input.val()).draw();
                //         }),
                //         $clearButton = $('<button>')
                //         .text('Hapus')
                //         .click(function() {
                //             input.val('');
                //             $searchButton.click();
                //         })
                //     $('.dataTables_filter').append($searchButton, $clearButton);
                // }
            });

    })
</script>