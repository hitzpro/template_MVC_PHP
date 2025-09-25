<form method="POST" action="<?= $action ?? '#' ?>">
  <?php foreach ($fields as $field): ?>
    <div class="mb-3">
      <label for="<?= $field['name'] ?>" class="form-label">
        <?= $field['label'] ?>
      </label>
      <input 
        type="<?= $field['type'] ?? 'text' ?>" 
        class="form-control" 
        id="<?= $field['name'] ?>" 
        name="<?= $field['name'] ?>" 
        placeholder="<?= $field['placeholder'] ?? '' ?>" 
        value="<?= $field['value'] ?? '' ?>"
        <?= !empty($field['required']) ? 'required' : '' ?>
      >
    </div>
  <?php endforeach; ?>

  <button type="submit" class="btn btn-primary">
    <?= $submitText ?? 'Submit' ?>
  </button>
</form>
