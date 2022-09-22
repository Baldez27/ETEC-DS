/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JFrame.java to edit this template
 */
package AtividadeCalculadora;

/**
 *
 * @author CAMARGO
 */
public class Calculadora extends javax.swing.JFrame {

    /**
     * Creates new form Calculadora
     */
    public Calculadora() {
        initComponents();
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();
        text_n1 = new javax.swing.JTextField();
        text_n2 = new javax.swing.JTextField();
        text_res = new javax.swing.JTextField();
        btn_Soma = new javax.swing.JButton();
        btn_Sub = new javax.swing.JButton();
        btn_Multi = new javax.swing.JButton();
        btn_Div = new javax.swing.JButton();
        btn_Retornar = new javax.swing.JButton();
        btn_Novo = new javax.swing.JButton();
        btn_Limpar = new javax.swing.JButton();
        btn_Sair = new javax.swing.JButton();
        btn_Comp = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        jLabel1.setText("N1");

        jLabel2.setText("N2");

        jLabel3.setText("Resultado");

        btn_Soma.setText("+");
        btn_Soma.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btn_SomaActionPerformed(evt);
            }
        });

        btn_Sub.setText("-");
        btn_Sub.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btn_SubActionPerformed(evt);
            }
        });

        btn_Multi.setText("*");
        btn_Multi.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btn_MultiActionPerformed(evt);
            }
        });

        btn_Div.setText("/");
        btn_Div.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btn_DivActionPerformed(evt);
            }
        });

        btn_Retornar.setText("Retornar");
        btn_Retornar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btn_RetornarActionPerformed(evt);
            }
        });

        btn_Novo.setText("Novo");
        btn_Novo.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btn_NovoActionPerformed(evt);
            }
        });

        btn_Limpar.setText("Limpar");
        btn_Limpar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btn_LimparActionPerformed(evt);
            }
        });

        btn_Sair.setText("Sair");
        btn_Sair.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btn_SairActionPerformed(evt);
            }
        });

        btn_Comp.setText("Comparação");
        btn_Comp.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btn_CompActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(layout.createSequentialGroup()
                        .addGap(19, 19, 19)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.CENTER)
                            .addComponent(jLabel1)
                            .addComponent(jLabel2)
                            .addComponent(jLabel3))
                        .addGap(18, 18, 18)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                            .addComponent(text_n1, javax.swing.GroupLayout.DEFAULT_SIZE, 150, Short.MAX_VALUE)
                            .addComponent(text_n2)
                            .addComponent(text_res)))
                    .addGroup(layout.createSequentialGroup()
                        .addContainerGap()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(layout.createSequentialGroup()
                                .addComponent(btn_Soma)
                                .addGap(7, 7, 7)
                                .addComponent(btn_Sub)
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addComponent(btn_Multi)
                                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                                .addComponent(btn_Div))
                            .addGroup(layout.createSequentialGroup()
                                .addGap(16, 16, 16)
                                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.CENTER)
                                    .addComponent(btn_Novo)
                                    .addComponent(btn_Sair))))
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                                .addComponent(btn_Limpar)
                                .addComponent(btn_Comp))
                            .addGroup(layout.createSequentialGroup()
                                .addGap(23, 23, 23)
                                .addComponent(btn_Retornar)))))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(38, 38, 38)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.CENTER)
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(jLabel1)
                        .addGap(24, 24, 24)
                        .addComponent(jLabel2)
                        .addGap(21, 21, 21)
                        .addComponent(jLabel3))
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(text_n1, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(18, 18, 18)
                        .addComponent(text_n2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(18, 18, 18)
                        .addComponent(text_res, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addGap(47, 47, 47)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.CENTER)
                    .addComponent(btn_Soma)
                    .addComponent(btn_Sub)
                    .addComponent(btn_Multi)
                    .addComponent(btn_Div)
                    .addComponent(btn_Retornar))
                .addGap(18, 18, 18)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(btn_Novo)
                    .addComponent(btn_Limpar))
                .addGap(18, 18, 18)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(btn_Sair)
                    .addComponent(btn_Comp))
                .addContainerGap(11, Short.MAX_VALUE))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void btn_SomaActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btn_SomaActionPerformed
        // TODO add your handling code here:
        int x, y, z; // Variáveis de apoio

        String r; // R string para receber valor

        x = Integer.parseInt(text_n1.getText()); //Mesclando o Campo com a variável

        y = Integer.parseInt(text_n2.getText());

        z = x + y;//operação

        r = String.valueOf(z); // passando a variável para String para que o campo de texto seja aceito 

        text_res.setText(r);// Camppo de resposta recebendo valor
    }//GEN-LAST:event_btn_SomaActionPerformed

    private void btn_SubActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btn_SubActionPerformed
        // TODO add your handling code here:
        int x, y, z; // Variáveis de apoio

        String r; // R string para receber valor

        x = Integer.parseInt(text_n1.getText()); //Mesclando o Campo com a variável

        y = Integer.parseInt(text_n2.getText());

        z = x - y;//operação

        r = String.valueOf(z); // passando a variável para String para que o campo de texto seja aceito 

        text_res.setText(r);// Camppo de resposta recebendo valor
    }//GEN-LAST:event_btn_SubActionPerformed

    private void btn_MultiActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btn_MultiActionPerformed
        // TODO add your handling code here:
        int x, y, z; // Variáveis de apoio

        String r; // R string para receber valor

        x = Integer.parseInt(text_n1.getText()); //Mesclando o Campo com a variável

        y = Integer.parseInt(text_n2.getText());

        z = x * y;//operação

        r = String.valueOf(z); // passando a variável para String para que o campo de texto seja aceito 

        text_res.setText(r);// Camppo de resposta recebendo valor
    }//GEN-LAST:event_btn_MultiActionPerformed

    private void btn_DivActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btn_DivActionPerformed
        // TODO add your handling code here:
        int x, y, z; // Variáveis de apoio

        String r; // R string para receber valor

        x = Integer.parseInt(text_n1.getText()); //Mesclando o Campo com a variável

        y = Integer.parseInt(text_n2.getText());

        z = x / y;//operação

        r = String.valueOf(z); // passando a variável para String para que o campo de texto seja aceito 

        text_res.setText(r);// Camppo de resposta recebendo valor
    }//GEN-LAST:event_btn_DivActionPerformed

    private void btn_RetornarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btn_RetornarActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_btn_RetornarActionPerformed

    private void btn_NovoActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btn_NovoActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_btn_NovoActionPerformed

    private void btn_LimparActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btn_LimparActionPerformed
        // TODO add your handling code here:
        text_n1.setText("");
        text_n2.setText("");
        text_res.setText("");

    }//GEN-LAST:event_btn_LimparActionPerformed

    private void btn_SairActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btn_SairActionPerformed
        // TODO add your handling code here:
        System.exit(0);
    }//GEN-LAST:event_btn_SairActionPerformed

    private void btn_CompActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btn_CompActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_btn_CompActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(Calculadora.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Calculadora.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Calculadora.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Calculadora.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Calculadora().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btn_Comp;
    private javax.swing.JButton btn_Div;
    private javax.swing.JButton btn_Limpar;
    private javax.swing.JButton btn_Multi;
    private javax.swing.JButton btn_Novo;
    private javax.swing.JButton btn_Retornar;
    private javax.swing.JButton btn_Sair;
    private javax.swing.JButton btn_Soma;
    private javax.swing.JButton btn_Sub;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JTextField text_n1;
    private javax.swing.JTextField text_n2;
    private javax.swing.JTextField text_res;
    // End of variables declaration//GEN-END:variables
}
