<h2>Golongan</h2>

<a href="<?php echo URL; ?>/golongan/input" class="btn">Input Golongan</a>

<table id="dtb">
      <thead>
            <tr>
                  <th>No</th>
                  <th>Kode Golongan</th>
                  <th>Nama Golongan</th>
                  <th>Edit</th>
                  <th>Delete</th>
            </tr>
      </thead>
      <tbody>
            <?php $no = 1;
            foreach ($data['rows'] as $row) { ?>
                  <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['gol_kode']; ?></td>
                        <td><?php echo $row['gol_nama']; ?></td>
                        <td><a href="<?php echo URL; ?>/golongan/edit/<?php echo $row['gol_id']; ?>" class="btnedt">Edit</a></td>
                        <td><a href="<?php echo URL; ?>/golongan/delete/<?php echo $row['gol_id']; ?>" class="btndlt" onclick="return confirm('Yakin dek?')">Delete</a></td>
                  </tr>
            <?php $no++;
            } ?>
      </tbody>
</table>