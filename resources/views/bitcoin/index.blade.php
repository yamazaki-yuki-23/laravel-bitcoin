<div class="container">
  <table border="1">
    <tbody>
      <tr>
        <th>bitflyer</th>
        <th>Zaif</th>
        <th>coincheck</th>
      </tr>
      <tr>
        <td>¥{{ number_format($data['bitflyer']['ltp']) }}円</td>
        <td>¥{{ number_format($data['Zaif']['last']) }}円</td>
        <td>¥{{ number_format($data['coincheck']['last']) }}円</td>
      </tr>
    </tbody>
  </table>
</div>