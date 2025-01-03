  const ctx = document.getElementById('doughnut');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ['Karyawan', 'Jenis Cuti', 'Riwayat Pengajuan Cuti', 'Data Pengajuan Cuti'],
      datasets: [{
        label: 'Employee',
        data: [15, 5, 20, 5],
        borderWidth: 1
      }]
    },
    options: {
        responsive: true
    }
  });