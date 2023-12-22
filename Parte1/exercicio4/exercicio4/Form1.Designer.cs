namespace exercicio4
{
    partial class FrmCaixaEletronico
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            label1 = new Label();
            btnImpNotas = new Button();
            txtVSaque = new TextBox();
            lblVSaque = new Label();
            pnCaixa = new Panel();
            lblCaixa = new Label();
            pnCaixa.SuspendLayout();
            SuspendLayout();
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Font = new Font("Tahoma", 9F, FontStyle.Regular, GraphicsUnit.Point);
            label1.ForeColor = Color.Firebrick;
            label1.Location = new Point(28, 174);
            label1.Name = "label1";
            label1.Size = new Size(433, 14);
            label1.TabIndex = 9;
            label1.Text = "*Esta máquina permite a retirada apenas de notas de 100, 50, 20 e 10 reais. ";
            // 
            // btnImpNotas
            // 
            btnImpNotas.BackColor = Color.OrangeRed;
            btnImpNotas.Font = new Font("Tahoma", 18F, FontStyle.Regular, GraphicsUnit.Point);
            btnImpNotas.Location = new Point(111, 219);
            btnImpNotas.Name = "btnImpNotas";
            btnImpNotas.Size = new Size(288, 63);
            btnImpNotas.TabIndex = 8;
            btnImpNotas.Text = "Imprimir Notas";
            btnImpNotas.UseVisualStyleBackColor = false;
            btnImpNotas.Click += btnImpNotas_Click;
            // 
            // txtVSaque
            // 
            txtVSaque.Font = new Font("Tahoma", 12F, FontStyle.Regular, GraphicsUnit.Point);
            txtVSaque.Location = new Point(244, 132);
            txtVSaque.Name = "txtVSaque";
            txtVSaque.Size = new Size(228, 27);
            txtVSaque.TabIndex = 7;
            // 
            // lblVSaque
            // 
            lblVSaque.AutoSize = true;
            lblVSaque.Font = new Font("Tahoma", 14.25F, FontStyle.Regular, GraphicsUnit.Point);
            lblVSaque.Location = new Point(28, 132);
            lblVSaque.Name = "lblVSaque";
            lblVSaque.Size = new Size(210, 23);
            lblVSaque.TabIndex = 6;
            lblVSaque.Text = "Digite o valor do saque:";
            // 
            // pnCaixa
            // 
            pnCaixa.BackColor = SystemColors.HotTrack;
            pnCaixa.Controls.Add(lblCaixa);
            pnCaixa.Location = new Point(0, -2);
            pnCaixa.Name = "pnCaixa";
            pnCaixa.Size = new Size(513, 80);
            pnCaixa.TabIndex = 5;
            // 
            // lblCaixa
            // 
            lblCaixa.AutoSize = true;
            lblCaixa.Font = new Font("Tahoma", 32.25F, FontStyle.Bold, GraphicsUnit.Point);
            lblCaixa.ForeColor = SystemColors.ButtonHighlight;
            lblCaixa.Location = new Point(68, 17);
            lblCaixa.Name = "lblCaixa";
            lblCaixa.Size = new Size(375, 52);
            lblCaixa.TabIndex = 1;
            lblCaixa.Text = "Caixa Eletrônico";
            // 
            // FrmCaixaEletronico
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            BackColor = SystemColors.ActiveCaption;
            ClientSize = new Size(512, 308);
            Controls.Add(label1);
            Controls.Add(btnImpNotas);
            Controls.Add(txtVSaque);
            Controls.Add(lblVSaque);
            Controls.Add(pnCaixa);
            Name = "FrmCaixaEletronico";
            Text = "Caixa Eletrônico";
            pnCaixa.ResumeLayout(false);
            pnCaixa.PerformLayout();
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label label1;
        private Button btnImpNotas;
        private TextBox txtVSaque;
        private Label lblVSaque;
        private Panel pnCaixa;
        private Label lblCaixa;
    }
}