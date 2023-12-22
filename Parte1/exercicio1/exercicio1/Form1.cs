using System.Drawing.Imaging;

namespace exercicio1
{
    public partial class CaixaEletronico : Form
    {
        public CaixaEletronico()
        {
            InitializeComponent();
        }

        private void btnImpNotas_Click(object sender, EventArgs e)
        {
            float? nota1 = Converter(txtN1.Text, "Nota 1");
            float? nota2 = Converter(txtN2.Text, "Nota 2");
            float? nota3 = Converter(txtN3.Text, "Nota 3");
            float? peso1 = Converter(txtP1.Text, "Peso 1");
            float? peso2 = Converter(txtP2.Text, "peso 2");
            float? peso3 = Converter(txtP3.Text, "Peso 3");

            if (nota1 != null && nota2 != null && nota3 != null &&
            peso1 != null && peso2 != null && peso3 != null)
            {
                float media = (float)((nota1 * peso1 + nota2 * peso2 + nota3 * peso3) / (peso1 + peso2 + peso3));
                MessageBox.Show($"A média do aluno nas 3 provas foi de {media}!");
            }
        }

        private float? Converter(string valor, string campo)
        {
            //Converte o valor de uma string para float.
            //Se a conversão não for bem sucedida, retorna null.
            try
            {
                float valorSaque = int.Parse(valor);
                return valorSaque;
            }
            catch (Exception)
            {
                MessageBox.Show($"O valor digitado no campo {campo} é inválido!");
                return null;
            }
        }
    }
}