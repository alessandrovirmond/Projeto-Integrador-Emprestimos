/* import { test, expect } from '@playwright/test';

test('Realizar emprestimo sem valor', async ({ page }) => {


  await page.goto('http://localhost:5173');

  await page.fill('#email', 'ale@dev.com');
  await page.fill('#senha', '123456');

  await page.click('#entrar');

  await page.click('#realizarEmprestimo');

  const erro = await page.textContent('#mensagemErro');

  expect(erro).toContain('Digite o valor.');
});
 */