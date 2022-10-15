wp.domReady( () => {
  wp.blocks.unregisterBlockStyle('core/button', 'outline');
  wp.blocks.unregisterBlockStyle('core/button', 'fill');
  wp.blocks.unregisterBlockStyle('core/separator', 'dots');

  wp.blocks.registerBlockStyle('core/button', {
    name: 'primary-button',
    label: 'Primary',
    isDefault: true
  });
  
  wp.blocks.registerBlockStyle('core/button', {
    name: 'secondary-button',
    label: 'Secondary'
  });
})