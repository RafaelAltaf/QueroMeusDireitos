namespace exercicio1
{
    partial class CaixaEletronico
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
            pnCaixa = new Panel();
            lblNotas = new Label();
            lblProva1 = new Label();
            txtN1 = new TextBox();
            btnCalcular = new Button();
            txtP1 = new TextBox();
            lblN1 = new Label();
            lblP1 = new Label();
            lblP2 = new Label();
            lblN2 = new Label();
            txtP2 = new TextBox();
            txtN2 = new TextBox();
            lblProva2 = new Label();
            lblP3 = new Label();
            lblN3 = new Label();
            txtP3 = new TextBox();
            txtN3 = new TextBox();
            lblProva3 = new Label();
            pnProva1 = new Panel();
            pnProva2 = new Panel();
            pnProva3 = new Panel();
            pnCaixa.SuspendLayout();
            pnProva1.SuspendLayout();
            pnProva2.SuspendLayout();
            pnProva3.SuspendLayout();
            SuspendLayout();
            // 
            // pnCaixa
            // 
            pnCaixa.BackColor = SystemColors.HotTrack;
            pnCaixa.Controls.Add(lblNotas);
            pnCaixa.Location = new Point(2, 2);
            pnCaixa.Name = "pnCaixa";
            pnCaixa.Size = new Size(513, 80);
            pnCaixa.TabIndex = 0;
            // 
            // lblNotas
            // 
            lblNotas.AutoSize = true;
            lblNotas.Font = new Font("Tahoma", 21.75F, FontStyle.Bold, GraphicsUnit.Point);
            lblNotas.ForeColor = SystemColors.ButtonHighlight;
            lblNotas.Location = new Point(28, 21);
            lblNotas.Name = "lblNotas";
            lblNotas.Size = new Size(469, 35);
            lblNotas.TabIndex = 1;
            lblNotas.Text = "Calculadora de Notas Escolares";
            // 
            // lblProva1
            // 
            lblProva1.AutoSize = true;
            lblProva1.Font = new Font("Tahoma", 14.25F, FontStyle.Regular, GraphicsUnit.Point);
            lblProva1.Location = new Point(52, 25);
            lblProva1.Name = "lblProva1";
            lblProva1.Size = new Size(72, 23);
            lblProva1.TabIndex = 1;
            lblProva1.Text = "Prova 1";
            // 
            // txtN1
            // 
            txtN1.Font = new Font("Tahoma", 12F, FontStyle.Regular, GraphicsUnit.Point);
            txtN1.Location = new Point(20, 62);
            txtN1.Name = "txtN1";
            txtN1.Size = new Size(50, 27);
            txtN1.TabIndex = 2;
            // 
            // btnCalcular
            // 
            btnCalcular.BackColor = Color.OrangeRed;
            btnCalcular.Font = new Font("Tahoma", 18F, FontStyle.Regular, GraphicsUnit.Point);
            btnCalcular.Location = new Point(121, 235);
            btnCalcular.Name = "btnCalcular";
            btnCalcular.Size = new Size(288, 63);
            btnCalcular.TabIndex = 3;
            btnCalcular.Text = "Calcular";
            btnCalcular.UseVisualStyleBackColor = false;
            btnCalcular.Click += btnImpNotas_Click;
            // 
            // txtP1
            // 
            txtP1.Font = new Font("Tahoma", 12F, FontStyle.Regular, GraphicsUnit.Point);
            txtP1.Location = new Point(103, 62);
            txtP1.Name = "txtP1";
            txtP1.Size = new Size(50, 27);
            txtP1.TabIndex = 4;
            // 
            // lblN1
            // 
            lblN1.AutoSize = true;
            lblN1.Font = new Font("Tahoma", 8.25F, FontStyle.Bold, GraphicsUnit.Point);
            lblN1.Location = new Point(20, 92);
            lblN1.Name = "lblN1";
            lblN1.Size = new Size(43, 13);
            lblN1.TabIndex = 5;
            lblN1.Text = "Nota 1";
            // 
            // lblP1
            // 
            lblP1.AutoSize = true;
            lblP1.Font = new Font("Tahoma", 8.25F, FontStyle.Bold, GraphicsUnit.Point);
            lblP1.Location = new Point(103, 92);
            lblP1.Name = "lblP1";
            lblP1.Size = new Size(44, 13);
            lblP1.TabIndex = 6;
            lblP1.Text = "Peso 1";
            // 
            // lblP2
            // 
            lblP2.AutoSize = true;
            lblP2.Font = new Font("Tahoma", 8.25F, FontStyle.Bold, GraphicsUnit.Point);
            lblP2.Location = new Point(102, 94);
            lblP2.Name = "lblP2";
            lblP2.Size = new Size(44, 13);
            lblP2.TabIndex = 11;
            lblP2.Text = "Peso 2";
            // 
            // lblN2
            // 
            lblN2.AutoSize = true;
            lblN2.Font = new Font("Tahoma", 8.25F, FontStyle.Bold, GraphicsUnit.Point);
            lblN2.Location = new Point(19, 94);
            lblN2.Name = "lblN2";
            lblN2.Size = new Size(43, 13);
            lblN2.TabIndex = 10;
            lblN2.Text = "Nota 2";
            // 
            // txtP2
            // 
            txtP2.Font = new Font("Tahoma", 12F, FontStyle.Regular, GraphicsUnit.Point);
            txtP2.Location = new Point(102, 64);
            txtP2.Name = "txtP2";
            txtP2.Size = new Size(50, 27);
            txtP2.TabIndex = 9;
            // 
            // txtN2
            // 
            txtN2.Font = new Font("Tahoma", 12F, FontStyle.Regular, GraphicsUnit.Point);
            txtN2.Location = new Point(19, 64);
            txtN2.Name = "txtN2";
            txtN2.Size = new Size(50, 27);
            txtN2.TabIndex = 8;
            // 
            // lblProva2
            // 
            lblProva2.AutoSize = true;
            lblProva2.Font = new Font("Tahoma", 14.25F, FontStyle.Regular, GraphicsUnit.Point);
            lblProva2.Location = new Point(47, 27);
            lblProva2.Name = "lblProva2";
            lblProva2.Size = new Size(72, 23);
            lblProva2.TabIndex = 7;
            lblProva2.Text = "Prova 2";
            // 
            // lblP3
            // 
            lblP3.AutoSize = true;
            lblP3.Font = new Font("Tahoma", 8.25F, FontStyle.Bold, GraphicsUnit.Point);
            lblP3.Location = new Point(98, 93);
            lblP3.Name = "lblP3";
            lblP3.Size = new Size(44, 13);
            lblP3.TabIndex = 16;
            lblP3.Text = "Peso 3";
            // 
            // lblN3
            // 
            lblN3.AutoSize = true;
            lblN3.Font = new Font("Tahoma", 8.25F, FontStyle.Bold, GraphicsUnit.Point);
            lblN3.Location = new Point(15, 93);
            lblN3.Name = "lblN3";
            lblN3.Size = new Size(43, 13);
            lblN3.TabIndex = 15;
            lblN3.Text = "Nota 3";
            // 
            // txtP3
            // 
            txtP3.Font = new Font("Tahoma", 12F, FontStyle.Regular, GraphicsUnit.Point);
            txtP3.Location = new Point(98, 63);
            txtP3.Name = "txtP3";
            txtP3.Size = new Size(50, 27);
            txtP3.TabIndex = 14;
            // 
            // txtN3
            // 
            txtN3.Font = new Font("Tahoma", 12F, FontStyle.Regular, GraphicsUnit.Point);
            txtN3.Location = new Point(15, 63);
            txtN3.Name = "txtN3";
            txtN3.Size = new Size(50, 27);
            txtN3.TabIndex = 13;
            // 
            // lblProva3
            // 
            lblProva3.AutoSize = true;
            lblProva3.Font = new Font("Tahoma", 14.25F, FontStyle.Regular, GraphicsUnit.Point);
            lblProva3.Location = new Point(45, 26);
            lblProva3.Name = "lblProva3";
            lblProva3.Size = new Size(72, 23);
            lblProva3.TabIndex = 12;
            lblProva3.Text = "Prova 3";
            // 
            // pnProva1
            // 
            pnProva1.BackColor = Color.Orange;
            pnProva1.Controls.Add(lblP1);
            pnProva1.Controls.Add(lblN1);
            pnProva1.Controls.Add(txtP1);
            pnProva1.Controls.Add(txtN1);
            pnProva1.Controls.Add(lblProva1);
            pnProva1.Location = new Point(1, 82);
            pnProva1.Name = "pnProva1";
            pnProva1.Size = new Size(181, 138);
            pnProva1.TabIndex = 17;
            // 
            // pnProva2
            // 
            pnProva2.BackColor = Color.YellowGreen;
            pnProva2.Controls.Add(lblP2);
            pnProva2.Controls.Add(lblN2);
            pnProva2.Controls.Add(txtP2);
            pnProva2.Controls.Add(txtN2);
            pnProva2.Controls.Add(lblProva2);
            pnProva2.Location = new Point(182, 82);
            pnProva2.Name = "pnProva2";
            pnProva2.Size = new Size(171, 138);
            pnProva2.TabIndex = 18;
            // 
            // pnProva3
            // 
            pnProva3.BackColor = Color.MediumOrchid;
            pnProva3.Controls.Add(lblP3);
            pnProva3.Controls.Add(lblN3);
            pnProva3.Controls.Add(txtP3);
            pnProva3.Controls.Add(txtN3);
            pnProva3.Controls.Add(lblProva3);
            pnProva3.Location = new Point(351, 82);
            pnProva3.Name = "pnProva3";
            pnProva3.Size = new Size(160, 138);
            pnProva3.TabIndex = 19;
            // 
            // CaixaEletronico
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            BackColor = SystemColors.ActiveCaption;
            ClientSize = new Size(513, 310);
            Controls.Add(pnProva3);
            Controls.Add(pnProva2);
            Controls.Add(pnProva1);
            Controls.Add(btnCalcular);
            Controls.Add(pnCaixa);
            Name = "CaixaEletronico";
            Text = "Caixa Eletrônico";
            pnCaixa.ResumeLayout(false);
            pnCaixa.PerformLayout();
            pnProva1.ResumeLayout(false);
            pnProva1.PerformLayout();
            pnProva2.ResumeLayout(false);
            pnProva2.PerformLayout();
            pnProva3.ResumeLayout(false);
            pnProva3.PerformLayout();
            ResumeLayout(false);
        }

        #endregion

        private Panel pnCaixa;
        private Label lblNotas;
        private Label lblProva1;
        private TextBox txtN1;
        private Button btnCalcular;
        private TextBox txtP1;
        private Label lblN1;
        private Label lblP1;
        private Label lblP2;
        private Label lblN2;
        private TextBox txtP2;
        private TextBox txtN2;
        private Label lblProva2;
        private Label lblP3;
        private Label lblN3;
        private TextBox txtP3;
        private TextBox txtN3;
        private Label lblProva3;
        private Panel pnProva1;
        private Panel pnProva2;
        private Panel pnProva3;
    }
}