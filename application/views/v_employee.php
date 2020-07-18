<h3>View Employee~</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">UUID</th>
      <th scope="col">Name</th>
      <th scope="col">Login Code</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $key => $value): ?>
    <tr>
      <th scope="row"><?php echo ($key + 1); ?></th>
      <td><?php echo $value->id; ?></td>
      <td><?php echo $value->name; ?></td>
      <td><?php echo md5($value->login); ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>