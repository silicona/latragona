//define([

//], function(){

	QUnit.module('RegExp.prototype');

	QUnit.test('RegExp.prototype.exec debería devolver el array resultante con la primera coincidencia de todo el string o Null', function (assert) {

		var re = /ab*/g;
		var str = 'abbcdefabh';

		assert.equal(re.lastIndex, 0);
		assert.deepEqual(re.exec(str), ['abb']);
		assert.equal(re.lastIndex, 3);
		assert.deepEqual(re.exec(str), ['ab']); 
		assert.equal(re.lastIndex, 9);
		assert.deepEqual(re.exec(str), null);
	});

	QUnit.test("RegExp.prototype.exec debería devolver los patrones capturados en el array.", function (assert) {
		
		var str = 'abbcdefabh';

		assert.deepEqual(/a(b)*/g.exec(str), ['abb', 'b']);
	});

	QUnit.test('RegExp.prototype.test debería devolver True o False.', function (assert) {

		var re = /\d/g;

		assert.ok(re.test('l4da'));
		assert.notOk(re.test('dyibm'));
	});

	QUnit.module('String.prototype', {});

	QUnit.test('String.prototype.search debería devolver un índice.', function (assert) {
		var re = /\d/g;
		assert.deepEqual('l4da'.search(re), 1, 'mensaje de test');
		assert.deepEqual('dyibm'.search(re), -1);
	});

	QUnit.test('String.prototype.match debería devolver las coincidencias o Null', function (assert) {

		var str = 'abbcdefabh';

		// If the regular expression does not include the g flag, returns the same result as RegExp.exec().
		assert.deepEqual(str.match(/ab*/), ['abb']);
		
		// If thecd regular expression includes the g flag, the method returns an Array containing all matches.
		assert.deepEqual(str.match(/ab*/g), ['abb', 'ab']);
		assert.deepEqual(str.match(/a(b*)/), ['abb', 'bb']);
		assert.deepEqual(str.match(/a(b*)/g), ['abb', 'ab']);  
	});

	QUnit.test('String.prototype.split deberia funcionar con una expresión regular', function (assert) {
		
		var str = 'Hello 1 word. Sentence number 2.';
		assert.deepEqual(str.split(/\d/), ["Hello ", " word. Sentence number ", "."]);
		
		// includes the separator if in capturing parentheses
		assert.deepEqual(str.split(/(\d)/), ["Hello ", "1", " word. Sentence number ", "2", "."]);
	});

	QUnit.test('String.prototype.replace debería funcionar con una expresión regular', function (assert) {

		var str = 'Hello 1 word. Sentence number 2.';
		assert.equal(str.replace(/\d/g, '5'), 'Hello 5 word. Sentence number 5.');
	});

//});
