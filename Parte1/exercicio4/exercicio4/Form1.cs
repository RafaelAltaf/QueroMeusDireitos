namespace exercicio4
{
    public partial class FrmCaixaEletronico : Form
    {
        public FrmCaixaEletronico()
        {
            InitializeComponent();
        }

        private void btnImpNotas_Click(object sender, EventArgs e)
        {
            try
            {
                int valorSaque = int.Parse(txtVSaque.Text);
                if (!(valorSaque < 10))
                {
                    string msg = "Foram imprimidas: ";
                    int qtdeNotas;
                    if (valorSaque >= 100)
                    {
                        qtdeNotas = valorSaque / 100;
                        msg += $"\n{qtdeNotas} notas de 100 reais";
                        valorSaque = valorSaque - qtdeNotas * 100;
                    }
                    if (valorSaque >= 50)
                    {
                        qtdeNotas = valorSaque / 50;
                        msg += $"\n{qtdeNotas} notas de 50 reais";
                        valorSaque = valorSaque - qtdeNotas * 50;
                    }
                    if (valorSaque >= 20)
                    {
                        qtdeNotas = valorSaque / 20;
                        msg += $"\n{qtdeNotas} notas de 20 reais";
                        valorSaque = valorSaque - qtdeNotas * 20;
                    }
                    if (valorSaque >= 10)
                    {
                        qtdeNotas = valorSaque / 10;
                        msg += $"\n{qtdeNotas} notas de 10 reais";
                        valorSaque = valorSaque - qtdeNotas * 10;
                    }
                    if (valorSaque == 0)
                    {
                        MessageBox.Show(msg);
                    }
                    else
                    {
                        MessageBox.Show("Sentimos muito, mas estamos sem notas, no momento, para suprir o valor solicitado.");
                    }

                }
                else
                {
                    MessageBox.Show("Sentimos muito, mas estamos sem notas, no momento, para suprir o valor solicitado.");
                }

            }
            catch (Exception)
            {
                MessageBox.Show("O valor digitado é inválido!");
            }
        }   
    }
}