import sass from 'sass';

describe('test', () => {
  test('render', () => {
    const result = sass.renderSync({
      file: 'scss/_loading.scss',
    });

    expect(result.css.toString()).toContain('.loading-overlay');
  });
});
